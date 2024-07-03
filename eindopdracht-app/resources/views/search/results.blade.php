@extends('layouts.default')
@section('content')


<style>
    body {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #f0f0f0;
        min-height: 100vh;
        overflow: scroll;
    }

    .movie-container {
        max-width: 1000px;
        width: 100%;
        margin-top: 50px;
        margin-bottom: 50px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 10px;
    }

    .movie-item {
        flex: 0 0 24%;
        margin: 10px;
        padding: 19px;
        text-align: center;
        background-color: rgba(190, 190, 180, 0.7);
    }

    .movie-item li {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .movie-item button {
        background-color: lightblue;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    .movie-item img {
        max-width: 100%;
        height: auto;
        margin-top: 10px;
    }
</style>

@if($movies->isEmpty())
    <p>No movies found.</p>
@else
    <div class="movie-container">
        @foreach($movies as $movie)
            <div class="movie-item">
                <h2>{{ $movie['title'] }}</h2>
                @if($movie['poster'])
                    <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}">
                @endif
                <p>{{ $movie['description'] }}</p>
                <button>Details</button>
            </div>
        @endforeach
    </div>
@endif
@endsection
