@setup
    require __DIR__.'/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    try {
        $dotenv->load();
        $dotenv->required(['DEPLOY_SERVER', 'DEPLOY_PATH'])->notEmpty();
    } catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
    $server = $_ENV['DEPLOY_SERVER'];
    $deploy_path = $_ENV['DEPLOY_PATH' ];
@endsetup

@servers(['web' => $server ])

@story('deploy')
    git
    file_permissions
    composer
    artisan
    optimize
@endstory

@task('git', ['on' => 'web'])
    cd {{ $deploy_path }}
    git reset --hard HEAD
    git checkout main
    git pull origin main
@endtask

@task('file_permissions', ['on' => 'web'])
    cd {{ $deploy_path }}
    sudo chmod -R 770 .
    sudo chmod -R 775 ./public
@endtask

@task('composer', ['on' => 'web'])
    cd {{ $deploy_path }}
    composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader
@endtask

@task('artisan', ['on' => 'web'])
    cd {{ $deploy_path }}
    php artisan migrate --force
@endtask

@task('optimize', ['on' => 'web'])
    cd {{ $deploy_path }}
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
@endtask
