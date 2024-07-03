@extends('layouts.default')

@section('content')

<form class="search" action="{{ route('search.perform') }}" method="GET">
  <input type="search" name="title" placeholder="Search here..." required>
  <button type="submit">Search</button>
</form>
@endsection

@section('styles')
<style>
  .search {
    width: 500px;
    height: 40px;
    margin-top: 60px;
    background: #444;
    background: rgba(0, 0, 0, .2);
    border-radius: 3px;
    border: 1px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
  }

  .search input {
    width: 370px;
    padding: 10px 5px;
    color: #ccc;
    border: 0;
    background: transparent;
    border-radius: 3px 0 0 3px;
  }

  .search input:focus {
    outline: 0;
    background: transparent;
  }

  .search button {
    width: 130px;
    height: 40px;
    color: #fff;
    background: transparent;
    border: 0;
    border-left: 1px solid #fff;
    border-radius: 0 3px 3px 0;
    cursor: pointer;
  }

  .search button:hover {
    background: grey;
    color: white;
  }

  .search button:active {
    box-shadow: 0px 0px 12px 0px rgba(225, 225, 225, 1);
  }

  .search button:focus {
    outline: 0;
  }
</style>
@endsection

@php
  $hideSidebar = true;
@endphp