@extends('layouts.default')

@section('content')
<form class="search" action="">
  <input type="search" placeholder="Search here..." required>
  <button type="submit">Search</button>
</form>
@endsection

@section('styles')
<style>
 .search {
    width: 500px;
    height: 40px;
    margin-top: 60px;
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 20px; /* Increased border-radius for a smoother look */
    display: flex;
    align-items: center;
    position: relative; /* Added to manage z-index and positioning */
    overflow: hidden; /* Prevents button overflow issues */
}

.search input {
    width: 100%; /* Fill the container width */
    padding: 10px 15px; /* Increased padding for better spacing */
    color: #ccc;
    border: none;
    background-color: transparent;
    border-radius: 20px 0 0 20px; /* Rounded corners on the left */
    transition: background-color 0.3s ease; /* Smooth transition for better UX */
}

.search input:focus {
    outline: none;
    background-color: rgba(255, 255, 255, 0.1); /* Lighten background on focus */
}

.search button {
    width: 130px;
    height: 100%; /* Ensure button height matches input height */
    color: #fff;
    background-color: #555; /* Darker background color */
    border: none;
    border-left: 1px solid #fff; /* White left border */
    border-radius: 0 20px 20px 0; /* Rounded corners on the right */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth transition for better UX */
}

.search button:hover {
    background-color: #777; /* Darker background on hover */
}

.search button:active {
    background-color: #333; /* Even darker background on click */
    box-shadow: 0px 0px 12px 0px rgba(225, 225, 225, 0.5); /* Soft shadow on click */
}

.search button:focus {
    outline: none;
}

/* Media query for responsiveness */
@media (max-width: 600px) {
    .search {
        width: 100%; /* Full width on smaller screens */
        max-width: 400px; /* Limit maximum width */
    }
}
</style>
@endsection

@php
  $hideSidebar = true;
@endphp