@extends('layout.app')


@section('content')
    <h1>Add Game</h1>
    <div class="col-12">
        <a class="btn btn-dark" href="{{ route('games.index') }}">Back</a>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <br />
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Title</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Title" value="{{ old('name') }}">
        <label for="price" class="form-label">Price</label>
        <input type="number" min=0 step=0.01 name="price" id="price" class="form-control" placeholder="0.00" value="{{ old('price') }}">
        <label for="publisher" class="form-label">Publisher</label>
        <input type="text" name="publisher" id="publisher" class="form-control" placeholder="Publisher" value="{{ old('publisher') }}">
        <label for="developer" class="form-label">Developer</label>
        <input type="text" name="developer" id="developer" class="form-control" placeholder="Developer" value="{{ old('developer') }}">
        <label for="release_date" class="form-label">Release Date</label>
        <input type="date" name="release_date" id="release_date" class="form-control" placeholder="Release Date" value="{{ old('release_date') }}">
        <p class="form-label">Genres</p>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Select Genres
            </button>
            <ul class="dropdown-menu list-group-flush" aria-labelledby="dropdownMenuButton1">
                @foreach ($genres as $genre)
                    <li class="list-group-item"><input type="checkbox" name="genres[]" value="{{ $genre->id }}" id="{{ $genre->name }}"
                            class="form-check-input"><label for="{{ $genre->name }}">{{ $genre->name }}</label>
                        <ul class="list-group-flush">
                            @foreach ($genre->children as $child)
                                <li class="list-group-item"><input type="checkbox" name="genres[]" value="{{ $child->id }}"
                                        id="{{ $child->name }}" class="form-check-input"><label
                                        for="{{ $child->name }}">{{ $child->name }}</label></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>

        <label for="age_rating" class="form-label">Age Rating</label>
        <input type="text" name="age_rating" id="age_rating" class="form-control" placeholder="Age Rating" value="{{ old('age_rating') }}">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" placeholder="Description" >{{ old('description') }}</textarea>

        <label for="image" class="form-label">Image</label>
        <input type="file" onchange="new_image_validation()" name="image" id="image" class="form-control" accept="image/*">
        <div class="form-text">Image size < 2MB</div>
        <img id="preview" src="#" alt="Image Preview" class="img-thumbnail" style="display: none;">
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
    <script src="{{ asset('js/games.js') }}"></script>



@endsection
