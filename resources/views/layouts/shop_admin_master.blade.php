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
@include('admin.include.lts.shop_lts')
@include('admin.include.preloader.preloader')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- JavaScript Bundle with Popper -->
@include('admin.include.footer.footer')
@include('admin.include.js.js')
</body>
</html>
