 @extends('frontend.master')
 @section('content')

 <title>US PROJECT-Service Detail</title>



 <div class="container-flush">

     <section class="section-products div-color-1">
         <div class="container">

             <div style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                 aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item">
                         <a href="/">
                             Home
                         </a>
                     </li>
                     <li class="breadcrumb-item active" aria-current="page">
                         <a href="{{route('service_list')}}">
                             Vista Salon & Spa
                         </a>
                     </li>
                     <li class="breadcrumb-item " aria-current="page" id="service-category">
                         Hair Styling
                     </li>
                 </ol>
             </div>

             </nav>
             <div class="row gx-5">

                 <div class="col-lg-8 col-md-8 col-sm-8 col-8 div-color-2">

                     <ul class="nav nav-pills  mb-3 service-detail-ul" id="pills-tab" role="tablist">
                         <li class="nav-item" role="presentation">
                             <button class="btn   custom-hover-1 active" id="pills-straight-hair-tab"
                                 data-bs-toggle="pill" data-bs-target="#pills-straight-hair" type="button" role="tab"
                                 aria-controls="pills-straight-hair" aria-selected="true">Straight Hair</button>
                         </li>
                         <li class="nav-item" role="presentation">
                             <button class="btn   custom-hover-1" id="pills-wavy-hair-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-wavy-hair" type="button" role="tab"
                                 aria-controls="pills-wavy-hair" aria-selected="false">Wavy Hair</button>
                         </li>
                         <li class="nav-item" role="presentation">
                             <button class="btn  custom-hover-1" id="pills-curly-hair-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-curly-hair" type="button" role="tab"
                                 aria-controls="pills-curly-hair" aria-selected="false">Curly Hair</button>
                         </li>
                         <li class="nav-item" role="presentation">
                             <button class="btn  custom-hover-1" id="pills-coily-hair-tab" data-bs-toggle="pill"
                                 data-bs-target="#pills-coily-hair" type="button" role="tab"
                                 aria-controls="pills-coily-hair" aria-selected="false">Coily Hair</button>
                         </li>
                     </ul>
                     <div class="tab-content" id="pills-tabContent">
                         <div class="tab-pane service-parent fade show active" id="pills-straight-hair" role="tabpanel"
                             aria-labelledby="pills-straight-hair-tab"> 
                             <div class="d-flex justify-content-between align-items-center">

                                 <h1 class="d-inline service-title">Straight Hair</h1>

                                 <div>
                                     <span>Price</span>
                                     <span class="price-value">$10.00</span>
                                     <span class="person-quanitty">/person</span>
                                 </div>
                             </div>
                             <h3 class="text-secondary service-tagline">Lorem ipsum dolor sit amet consectetur
                                 adipisicing elit. Iusto </h3>

                             <h5> Additional Information</h5>
                             <ul>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                             </ul>
                             <button type="button" class="btn btn-outlined add-to-cart" data-service-id="1">Add to Cart</button>
                         </div>
                         <div class="tab-pane service-parent fade" id="pills-wavy-hair" role="tabpanel"
                             aria-labelledby="pills-wavy-hair-tab">
                             <div class="d-flex justify-content-between align-items-center">

                                 <h1 class="d-inline  service-title">Wavy Hair</h1>

                                 <div>
                                     <span>Price</span>
                                     <span class="price-value">$20.00</span>
                                     <span class="person-quanitty">/person</span>
                                 </div>
                             </div>
                             <h3 class="text-secondary service-tagline">Lorem ipsum dolor sit amet consectetur
                                 adipisicing elit. Iusto </h3>

                             <h5> Additional Information</h5>
                             <ul>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                             </ul>
                             <button type="button" class="btn btn-outlined add-to-cart" data-service-id="2">Add to Cart</button>
                         </div>
                         <div class="tab-pane service-parent fade" id="pills-curly-hair" role="tabpanel"
                             aria-labelledby="pills-curly-hair-tab">
                             <div class="d-flex justify-content-between align-items-center">

                                 <h1 class="d-inline  service-title">Curly Hair</h1>

                                 <div>
                                     <span>Price</span>
                                     <span class="price-value">$30.00</span>
                                     <span class="person-quanitty">/person</span>
                                 </div>
                             </div>
                             <h3 class="text-secondary service-tagline">Lorem ipsum dolor sit amet consectetur
                                 adipisicing elit. Iusto </h3>

                             <h5> Additional Information</h5>
                             <ul>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                             </ul>
                             <button type="button" class="btn btn-outlined add-to-cart" data-service-id="3">Add to Cart</button>
                         </div>
                         <div class="tab-pane service-parent fade" id="pills-coily-hair" role="tabpanel"
                             aria-labelledby="pills-coily-hair-tab">
                             <div class="d-flex justify-content-between align-items-center">

                                 <h1 class="d-inline  service-title">Coily Hair</h1>

                                 <div>
                                     <span>Price</span>
                                     <span class="price-value">$0.50</span>
                                     <span class="person-quanitty">/person</span>
                                 </div>
                             </div>
                             <h1></h1>
                             <h3 class="text-secondary service-tagline">Lorem ipsum dolor sit amet consectetur
                                 adipisicing elit. Iusto </h3>

                             <h5> Additional Information</h5>
                             <ul>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                                 <li class="service-features">Lorem ipsum dolor sit amet.</li>
                             </ul>
                             <button type="button" class="btn btn-outlined add-to-cart" data-service-id="4">Add to Cart</button>
                         </div>
                     </div>
                     

                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-4 div-color-3  ">
                     <div class="cart-item mt-2">
                            <h4 class="full-cart"></h4>
                       <div class="list-group cart-parent"> 
                            
                              <!--  <div class="list-group-item list-group-item-action" aria-current="true">
                                 <div class="d-flex w-100 justify-content-between">
                                     <h5 class="mb-1">Hair Styling</h5>
                                     <span class="remove-btn">
                                         <i class="fa-solid fa-minus fa-sm"></i>
                                     </span>
                                 </div>
                                 <p class="mb-1">Straight Hair</p>
                                 <div class="d-flex justify-content-between">
                                     <small class="quanity">
                                         <div class="input-group inline-group flex-nowrap">
                                             <div class="input-group-prepend">
                                                 <button class="btn-outline  custom-hover-1 btn-minus">
                                                     <i class="fa fa-minus"></i>
                                                 </button>
                                             </div>
                                             <input class="  quantity-input mx-2" min="0" name="quantity" value="1"
                                                 type="number">
                                                 
                                    <span class="service-counter px-3">${service.count}  </span>
                                             <div class="input-group-append">
                                                 <button class="btn-outline custom-hover-1 btn-plus">
                                                     <i class="fa fa-plus"></i>
                                                 </button>
                                             </div>
                                             person
                                         </div>
                                     </small>
                                     <small> $9.99 </small>
                                 </div>
                             </div> 
--> 
                         </div>
                       
                     </div>
                     <div class="total-price text-end my-3"> 
                             </div> 
                     <button type="button" class="btn btn-outlined checkout-btn " >Checkout</button>
                 </div>
             </div>
         </div>
     </section>




 </div>



 @endsection