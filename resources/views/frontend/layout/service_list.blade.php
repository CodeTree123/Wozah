 @extends('frontend.master')
 @section('content')




 <title>US PROJECT-Service_List</title>



 <div class="container-flush">

     <section class="section-products">
         <div class="container">
             <div class="row  ">
                 <div class="col-md-8 col-lg-6">
                     <div class="header">
                         <div class="shop-summary">
                             <div class="shop-name">
                                 <h2 class="d-inline ">
                                     Vista Salon & Spa
                                 </h2>
                                 <span class="shop-rating-field">
                                     <i class="fa-solid fa-star "></i>
                                     <span class="shop-rating"> 4.5/5</span>
                                 </span>
                             </div>

                             <div class="shop-time">
                                 <span>
                                     Tues-Sat <br> 09:00am-11:00pm
                                 </span>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>

             <h4>Salon Service</h4>
             <hr>
             <div class="row">
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1 ">
                     <a href="{{route('service_detail')}}">
                         <div id="product-1" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Hair Cutting</h3>
                                 <h4 class="product-old-price">$19.99</h4>
                                 <h4 class="product-price">$9.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1">
                     <a href="{{route('service_detail')}}">
                         <div id="product-2" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                         <span class="discount">15% off</span>
                                     </li>

                                 </ul>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Hair Styling</h3>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1">
                     <a href="{{route('service_detail')}}">
                         <div id="product-3" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Hair Coloring</h3>
                                 <h4 class="product-old-price">$79.99</h4>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>

                 </div>
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1">
                     <a href="{{route('service_detail')}}">
                         <div id="product-4" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                         <span class="discount">15% off</span>
                                     </li>

                                 </ul>
                                 <span class="new bg-danger">new</span>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Hair Highlights</h3>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>
				 <h4>Skin Care Service</h4>
             <hr> 
				 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1">
                     <a href="{{route('service_detail')}}">
                         <div id="product-5" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                                 <span class="new bg-danger">new</span>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Manicure</h3>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1 ">
                     <a href="{{route('service_detail')}}">
                         <div id="product-6" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                                 <span class="new bg-danger">new</span>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Pedicure</h3>
                                 <h4 class="product-old-price">$79.99</h4>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>



             </div>
             <h4>Waxing Service</h4>
             <hr>
             <div class="row">
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1 ">
                     <a href="{{route('service_detail')}}">
                         <div id="product-7" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                                 <span class="new bg-danger">new</span>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Face Waxing</h3>
                                 <h4 class="product-old-price">$19.99</h4>
                                 <h4 class="product-price">$9.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>


                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1">
                     <a href="{{route('service_detail')}}">
                         <div id="product-8" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                                 <span class="new bg-danger">new</span>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Arm Waxing</h3>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1 ">
                     <a href="{{route('service_detail')}}">
                         <div id="product-9" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Leg Waxing</h3>
                                 <h4 class="product-old-price">$79.99</h4>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1 ">
                     <a href="{{route('service_detail')}}">
                         <div id="product-10" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Body Waxing</h3>
                                 <h4 class="product-old-price">$79.99</h4>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <!-- Single Product -->
                 <div class="col-md-6 col-lg-4 col-xl-3 service-card mb-1">
                     <a href="{{route('service_detail')}}">
                         <div id="product-11" class="single-product">
                             <div class="part-1 ">
                                 <ul>
                                     <li>
                                         <span class="  overlay_icon ">
                                             Check Details
                                         </span>
                                     </li>

                                 </ul>
                             </div>
                             <div class="part-2">
                                 <h3 class="product-title">Shoulder Waxing</h3>
                                 <h4 class="product-old-price">$79.99</h4>
                                 <h4 class="product-price">$49.99</h4>
                             </div>
                         </div>
                     </a>
                 </div>



             </div>
         </div>
     </section>




 </div>


 @endsection