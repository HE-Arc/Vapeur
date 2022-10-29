@extends("layout.app")

@section("content")
<div class="row mt-2">
    <div class="col-12">
        <div class="card text-dark bg-light">
            <div class="row g-0">
                <div class="col-sm-12 col-md-5 text-center">
                    <img src="{{asset("images/{$game->image_path}")}}" class="img-fluid rounded" alt="{{$game->name}}">
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">{{$game->name}}</h5>
                        <h5 class="card-subtitle text-muted">{{$game->price}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Genre(s):</b>
                        @foreach ($game->genres as $genre)
                            <span class="badge bg-secondary">{{$genre->name}}</span>
                        @endforeach
                        </li>
                        <li class="list-group-item"><b>Publisher(s):</b> {{$game->publisher}}</li>
                        <li class="list-group-item"><b>Developer(s):</b> {{$game->developer}}</li>
                        <li class="list-group-item"><b>Release Date:</b> {{$game->release_date}}</li>
                        <li class="list-group-item"><b>Age rating:</b> {{$game->age_rating}}</li>
                    </ul>
                    <div class="card-body">
                        <p class="card-text">{{$game->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
