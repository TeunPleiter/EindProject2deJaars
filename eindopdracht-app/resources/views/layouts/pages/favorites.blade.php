@extends('layouts.default')
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

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