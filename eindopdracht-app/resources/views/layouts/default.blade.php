<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
    @yield('styles')
</head>
<body style="background-color: gray; ">

    


    <main style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: row;">
        @yield('content')
        @include('includes.header')

   
    </main>
    @include('includes.footer')
    @if (!isset($hideSidebar) || !$hideSidebar)
    @include('includes.sideBar')
    @endif

<Sidebar
</html>

<style>

.sidebar {
            position: fixed;
            height: 20%;
            align-content: center;
            left: 0;
            top: 0;
            bottom: 0;
            width: 250px;
            background-color: #f4f4f4;
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;
            top: 40vh;
            
        }
</style>


