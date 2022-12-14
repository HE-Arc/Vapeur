@extends('layout.app')


@section('content')
    <div class="row">
        <div class="col-12">
            <h1>{{$genre->name}}</h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($genre->games as $game)
        <div class="col">
            <div class="card h-100">
                <a href="{{route("games.show", $game->id)}}">
                <img class="card-img-top" src="{{asset("images/{$game->image_path}")}}" alt="{{$game->name}}">
                    <div class="card-body">
                        <h5 class="card-title text-truncate" data-bs-toggle=
                            <a href="{{route("games.show", $game->id)}}">{{$game->name}}</a>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">${{$game->price}}</h6>
                        <p class="card-text">{{$game->description}}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">
                            @foreach ($game->genres as $genre)
                                <a href="{{route("genres.show", $genre->id)}}"><span class="badge bg-secondary">{{$genre->name}}</span></a>
                            @endforeach
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
