<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wozah Admin panel</title>

@include('admin.include.css.css')
</head>
<body>
@include('admin.include.navber.navber')  
@include('admin.include.preloader.preloader')
@include('admin.include.lts.lts')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- JavaScript Bundle with Popper -->
@include('admin.include.js.js')
</body>
</html>
