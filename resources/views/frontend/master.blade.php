
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/fav.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Galada&family=Noto+Sans+Bengali:wght@300&family=Noto+Serif+Bengali:wght@100&family=Poppins:wght@500&family=Shippori+Antique+B1&display=swap"
        rel="stylesheet">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--Slick Slider Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">  -->
    <!--AOS Animation Style CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    


    <title>US PROJECT </title>
</head>

<body> 
    <div class="container-fluid container-parent">
         
         @include('frontend.include.header')

         @yield('content')

         @include('frontend.include.footer') 

    </div>


    <!-- Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- JQuery Library -->
    <script src="{{ asset('js/jquery-library.js') }}"></script>

    <!-- Slick Slider JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>


</html>