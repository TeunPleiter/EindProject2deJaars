<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
    
    <header>
        <h1>My Application</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Footer content here</p>
    </footer>
</body>
</html>
