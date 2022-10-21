@servers(['web' => $_ENV['SERVER']])

@setup
    $path = $_ENV['PATH' ];
@endsetup

@story('deploy')
    git
    composer
    artisan
    optimize
@endstory

@task('git', ['on' => 'web'])
    cd {{ $path }}
    git checkout main
    git pull origin main
@endtask

@task('composer', ['on' => 'web'])
    cd {{ $path }}
    composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader
@endtask

@task('artisan', ['on' => 'web'])
    cd {{ $path }}
    php artisan migrate --force
@endtask

@task('optimize', ['on' => 'web'])
    cd {{ $path }}
    php artisan config:cache
    php artisan route:cache {{-- not yet necessary as the number of route is small --}}
    php artisan view:cache
@endtask
