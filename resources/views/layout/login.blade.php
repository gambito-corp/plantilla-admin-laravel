<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.includes.head')
<body>
    @yield('content')
</body>
</html>
