@extends('layouts.default')
@section('content')

<div>
    <div style="height: 50px; width: 50px; display: flex; flex-direction: column; padding: 5px; margin: 5px;">
        @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
            <a href="{{ route('addfavorite', $movie->id) }}" style="text-decoration: none;">
                <button>ADD TO FAVORITES</button>
            </a>
        @endforeach
    </div>
</div>

@endsection