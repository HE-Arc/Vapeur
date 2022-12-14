@extends("layout.app")
@section("content")

<h1>Your favourites</h1>

<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Title</th>
                <th scope="col">Genre(s)</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($favoris as $game)
            <tr>
                <td>
                    <img class="img-fluid w-50" src="{{asset("images/{$game->image_path}")}}" alt="{{$game->name}}">
                </td>
                <td>
                    <h5>
						<a href="{{route("games.show", $game->id)}}">{{$game->name}}</a>
					</h5>
                </td>
                <td>
                    @foreach ($game->genres as $genre)
                        <a href="{{ route("genres.show", $genre->id)}}"><span class="badge bg-secondary">{{$genre->name}}</span></a>
                    @endforeach
                </td>
                <td>
                    <form action="{{ route('favoris.destroy', $game->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
