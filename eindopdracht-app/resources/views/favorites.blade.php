@extends('layouts.default')
@section('content')
<br><br><br><br>
<div class="movie-container">
    @foreach ($favorites as $favorite)
    <div class="movie-item">
        <li>{{ $favorite->movie->title }}</li>
        <img src="{{ route('getPoster', $favorite->movie->id) }}" alt="Movie Poster" style="max-width: 100%; height: auto;">
        <a href="{{ route('removefavorite', $favorite->movie->id) }}" style="text-decoration: none;">
            <button>REMOVE FAVORITE</button>
        </a>
    </div>
    @endforeach
</div>

<style>
body {
    margin: 0;
    display: flex;
    flex-direction: column; /* Ensure body grows with content */
    align-items: center; /* Center items vertically */
    background-color: #f0f0f0; /* Optional: background color for the page */
    min-height: 100vh; /* Ensure body at least takes full viewport height */
}

.movie-container {
    max-width: 1000px; /* Adjust the width to your preference */
    width: 100%; /* Ensure container stretches full width */
    margin-top: 50px; /* Space from the top */
    margin-bottom: 50px; /* Space from the bottom */
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 10px; /* Optional: for spacing inside the container */
    overflow-y: auto; /* Enable vertical scrolling */
    max-height: calc(100vh - 175px); /* Calculate max height for scrolling (adjust as needed) */
    
}

.movie-item {
    flex: 0 0 24%; /* Each movie item will take 24% of the container's width */
    margin: 10px; /* Space between items */
    padding: 19px;
    text-align: center; /* Center the content inside each item */
    background-color: rgba(190, 190, 180, 0.7); /* Semi-transparent black background */
}

.movie-item li {
    list-style-type: none; /* Remove bullet points from list items */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
}

.movie-item button {
    background-color: lightblue; /* Example: styling for the button */
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.movie-item img {
    max-width: 100%; /* Ensure images don't exceed container width */
    height: auto; /* Maintain aspect ratio */
    margin-top: 10px; /* Optional: space between button and image */
}
</style>

@endsection