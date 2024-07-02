<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
    @yield('styles')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url("fotos/EPJfoto.png");
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #fff; /* Ensures text is visible on a dark background */
            position: relative; /* Ensure content is positioned relative to the body */
            z-index: 1; /* Ensure content is above the background image */
        }

        .sidebar {
            position: fixed;
            height: 20%;
            left: 0;
            top: 0;
            bottom: 0;
            width: 250px;
            padding: 20px;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent sidebar background */
            color: #fff; /* Text color for sidebar */
            z-index: 2; /* Ensure sidebar is above background but below main content */
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent footer background */
            color: #fff; /* Text color for footer */
            padding: 10px 0;
            text-align: center;
            z-index: 2; /* Ensure footer is above background but below main content */
        }

        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0; /* Ensure the image is behind everything */
            pointer-events: none; /* Prevent the image from intercepting clicks */
        }
    </style>
</head>
<body>
    <img src="{{ asset('fotos/EPJfoto.png') }}" alt="description of myimage" class="background-image">

    
    <main class="main">
        @yield('content')
        @include('includes.header')
    </main>
    @include('includes.footer')
    @if (!isset($hideSidebar) || !$hideSidebar)
    @include('includes.sideBar')
    @endif
</body>
</html>
