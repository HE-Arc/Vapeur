@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Genres</h1>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">


        @foreach ($genres as $genre)
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-truncate" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="{{ $genre->name }}">
                            <a href="{{ route('genres.show', $genre->id) }}">{{ $genre->name }} ({{ count($genre->games) }})</a>
                        </h5>
                        <ul class="card-text">
                            @foreach ($genre->children as $child)
                                <li>
                                    <a href="{{ route('genres.show', $child->id) }}" class="link-dark">{{ $child->name }} ({{ count($child->games) }})</a>
                                </li>
                            @endforeach
                    </div>
                </div>
            </div>
        @endforeach



    </div>
@endsection
