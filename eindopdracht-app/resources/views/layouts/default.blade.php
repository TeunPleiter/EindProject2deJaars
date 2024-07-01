<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
</head>
<body style="background-color: red;">



    <main>
        @yield('content')
    </main>

    @include('includes.footer')

</body>
</html>
