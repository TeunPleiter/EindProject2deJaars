@extends('layouts.default')
@extends ('includes.header')
@extends ('includes.footer')
@section('content')
<style>
    .contact-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .contact-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .contact-header h1 {
        margin: 0;
        font-size: 2em;
        color: #333;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
    }

    .contact-form label {
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    .contact-form input, .contact-form textarea {
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1em;
    }

    .contact-form button {
        padding: 10px 20px;
        background-color: #009879;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 1em;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #007a65;
    }
</style>

<div class="contact-container">
    <div class="contact-header">
        <h1>Contact Us</h1>
    </div>
    <form class="contact-form" action="/submit-contact-form" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>
@stop
