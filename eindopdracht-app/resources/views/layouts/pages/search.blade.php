@extends('layouts.default')

@section('content')
<div class="container">
    <div class="sidebar" id="sidebar">
        <input type="text" class="search-input" placeholder="Search...">
    </div>
    <div class="main-content">
        <h1>Search Page</h1>
        <!-- Your search results or content here -->
    </div>
</div>
@endsection

@section('styles')
<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }

    .container {
        display: flex;
        height: calc(100vh - 60px); /* Full viewport height minus navbar height */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        padding-top: 60px; /* Ensure content starts below the navbar */
        box-sizing: border-box;
    }

    .sidebar {
        width: 30%;
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
        padding: 20px;
        box-sizing: border-box;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a slight shadow */
        border-radius: 10px; /* Rounded corners */
        margin-right: 20px; /* Space between sidebar and main content */
    }

    .main-content {
        width: 60%; /* Adjust width for a balanced look */
        padding: 20px;
        box-sizing: border-box;
        text-align: center; /* Center text for main content */
    }

    .search-input {
        width: 100%;
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1.2em;
        box-sizing: border-box;
        transition: border-color 0.3s ease; /* Smooth border color transition */
    }

    .search-input:focus {
        border-color: #333; /* Darker border on focus */
        outline: none; /* Remove default outline */
    }
</style>
@endsection
