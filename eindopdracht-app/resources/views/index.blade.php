<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPJ</title>
    <style>
        body {
            background-image: url('images/image.png');
            /* Adjust the path as per your file location */
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