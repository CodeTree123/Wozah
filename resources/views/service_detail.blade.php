<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/fav.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Galada&family=Noto+Sans+Bengali:wght@300&family=Noto+Serif+Bengali:wght@100&family=Poppins:wght@500&family=Shippori+Antique+B1&display=swap" rel="stylesheet">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--Slick Slider Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}"> 
    <!-- <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">  -->
    <!--AOS Animation Style CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
  
  

    <title>US PROJECT-Service Detail</title>
</head>

<body>


  <div class="container-flush">
    @include('header')
   
    <section class="section-products div-color-1">
		<div class="container">
     
    <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Featured Service</li>
    <li class="breadcrumb-item active" aria-current="page">Service Details</li>
  </ol>
</div>

</nav>
			<div class="row gx-5">
			<div class="col-lg-8 col-md-8 col-sm-8 col-8 div-color-2">
				<h1>Regular Haircut</h1>
					<h3 class="text-secondary service-tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, blanditiis?</h3>

				<h5> Additional Information</h5>
				<ul>
					<li class="service-features">Lorem ipsum dolor sit amet.</li>
					<li class="service-features">Lorem ipsum dolor sit amet.</li>
					<li class="service-features">Lorem ipsum dolor sit amet.</li>
					<li class="service-features">Lorem ipsum dolor sit amet.</li>
					<li class="service-features">Lorem ipsum dolor sit amet.</li>
				</ul>
			</div> 
			<div class="col-lg-4 col-md-4 col-sm-4 col-4 div-color-3  ">
				<button type="button" class="btn btn-outlined ">Add to Cart</button>
			</div> 
			</div>
		</div>
</section>
     
   
     
   
     @include('footer') 
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