@extends("layout.app")

@section("content")

@auth
    <a class="btn btn-secondary" href="{{ route('games.create') }}">Add game</a>
@endauth

<div class="row row-cols-1 row-cols-md-3 g-4">
	@foreach ($games as $game)
	<div class="col">
		<div class="card h-100">
            <a href="{{route("games.show", $game->id)}}">
			<img class="card-img-top" src="{{asset("images/{$game->image_path}")}}" alt="{{$game->name}}">
				<div class="card-body">
					<h5 class="card-title text-truncate" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$game->name}}">
						<a href="{{route("games.show", $game->id)}}">{{$game->name}}</a>
					</h5>
					<div class="container-fluid card-subtitle mb-2 ps-0 pe-0">
                        <div class="row">
                            <div class="col">
                                <h6 class="text-muted">${{$game->price}}</h6>
                            </div>
                            @auth
                                <form class="col text-end" action="{{route("favoris.update", $game->id)}}" method="POST">
                                    @csrf
                                    @method("PUT")
                                    <input type="hidden" name="id" value="{{$game->id}}">

                                    <button type="submit" class="favourite-icon"><i class="bi {{($favoris->contains($game) ? "bi-star-fill is-favourited" : "bi-star")}}"></i></button>
                                </form>
                            @endauth
                        </div>
                    </div>
					<p class="card-text">{{$game->description}}</p>
				</div>
				<div class="card-footer">
					<small class="text-muted">
						@foreach ($game->genres as $genre)
							<a href="{{ route("genres.show", $genre->id)}}"><span class="badge bg-secondary">{{$genre->name}}</span></a>
						@endforeach
					</small>
				</div>
			</div>
		</div>
	@endforeach
</div>

<div class="d-flex justify-content-center">
    <div class="p-2">{!! $games->links() !!}</div>
</div>

@endsection
