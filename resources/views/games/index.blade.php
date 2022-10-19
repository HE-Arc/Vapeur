@extends("layout.app")

@section("content")
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 mt-2 g-4">
    @foreach ($games as $game)
        <div class="col">
            <div class="card text-dark bg-light">
                <!-- TODO: Add link to game page -->
                <a href="{{route("games.show", $game->id)}}">
                    <!-- TODO: Find better way to retrieve images as it's probably not the best way -->
                    <img class="card-img-top" src="{{asset("images/{$game->image_path}")}}" alt="{{$game->name}}">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-truncate" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$game->name}}">
                        <!-- TODO: Add link to game page -->
                        <a href="{{route("games.show", $game->id)}}">{{$game->name}}</a>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">${{$game->price}}</h6>
                    <p class="card-text">{{$game->description}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
