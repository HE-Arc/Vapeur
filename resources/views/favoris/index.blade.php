@extends("layout.app")
@section("content")

<h1>Jeu en favoris</h1>

<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Genre</th>
                <th scope="col">Nom</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games->favoris as $game)
            <tr>
                <td>
                    @foreach ($game->genres as $genre)
                        <span>{{$genre->name}}</span>
                    @endforeach
                </td>
                <td>{{$game->name}}</td>
                <td>
                <form action="{{ route('favoris.destroy', $games->favoris->detach($game->id)) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer des favoris</button>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


@endsection
