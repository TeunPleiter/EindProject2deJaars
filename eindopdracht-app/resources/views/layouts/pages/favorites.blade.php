@extends('layouts.default')
@section('content')
@foreach ($favorites as $favorite)
<li>{{ $favorite->movie->title }}</li>
<a href="{{ route('removefavorite', $favorite->movie->id) }}" style="text-decoration: none;">
    <button>REMOVE FAVORITE</button>
</a>
<br>
<img src="{{ route('getPoster', $favorite->movie->id) }}" alt="Movie Poster" style="max-width: 100%; height: auto;">
@endforeach

@endsection