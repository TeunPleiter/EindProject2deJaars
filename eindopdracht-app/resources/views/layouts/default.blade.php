@extends ('includes.header')
@extends ('includes.footer')
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
<style url('https://cdn.discordapp.com/attachments/1091266770565877850/1254728034888712202/file-D5lGkdjWSpz2JWcMz77B53gK.png?ex=667a8c0b&is=66793a8b&hm=2eec36a5ea3ffb8512c88df9acdd4002daa941d25bc0750b51d99ec482de8f90&')></style>

    <header>
  
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>
</body>
</html>
