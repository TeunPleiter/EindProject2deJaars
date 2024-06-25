@extends('layouts.default')
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPJ</title>
    <style>
        body {
            background-image: url('https://cdn.discordapp.com/attachments/1091266770565877850/1254728034888712202/file-D5lGkdjWSpz2JWcMz77B53gK.png?ex=667a8c0b&is=66793a8b&hm=2eec36a5ea3ffb8512c88df9acdd4002daa941d25bc0750b51d99ec482de8f90&');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            margin: 0;
            height: 100vh;
            width: 100vw;
        }

    </style>

</head>

<body>
    <div class="container">
        <header class="row">
            @include('includes.header')
        </header>
        <div id="main" class="row">
            @yield('content')
        </div>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>

</html>