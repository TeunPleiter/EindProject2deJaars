@extends('layouts.default')

@section('content')
<h1>Search Results</h1>
@if($movies->isEmpty())
    <p>No movies found.</p>
@else
    <ul>
        @foreach($movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
@endif
@endsection
