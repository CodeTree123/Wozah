 <main class="bgg   ">
     <header class="pt-3 mb-1  ">
         <div class="container-fluid ">
             <div class="row justify-content-between align-items-center pb-2">

                 <div class="col-lg-3 col-md-3 col-sm-12 col-12 pb-2">
                     <a href="/" class="   text-dark text-decoration-none">
                         <img class="logo mx-auto d-block" src="{{ asset('img/logo.png') }}" alt="">
                     </a>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                     <form class="  mb-3 mb-lg-0">
                         <input type="search" class="form-control  new-form-control" placeholder="Search..."
                             aria-label="Search">
                     </form>
                 </div>
                 <div class=" col-lg-3 col-md-3 col-sm-6 col-6  d-flex justify-content-center align-items-center">
                   @if(Auth::user())
                                      {{(Auth::user()->phone)}}
                                      <span id="logged-in-state" class="me-5">

                                          <div class="dropdown  ">
                                              <img src="{{ asset('img/profile-image.jpg') }}" class="rounded-circle header-profile-img"
                                                  alt="..." id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                              <ul class="dropdown-menu menu-show" aria-labelledby="dropdownMenuButton1">
                                                  <span class="dropdown-menu-arrow"></span>
                                                  <li>
                                                      <a class="dropdown-item" href="{{route('edit_user_profile')}}">
                                                          My Profile
                                                      </a>
                                                  </li>
                                                  <!-- <li>
                                                      <a class="dropdown-item" href="#">
                                                          My Orders
                                                      </a>
                                                  </li> -->
                                                  <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                  </li>
                                              </ul>
                                          </div>
                                      </span>
                                      <!-- <img src="{{  'storage/app/'.auth()->user()->n_photo }}" class="rounded-circle mx-auto img-img" alt="" srcset=""> -->
                                      @else
                                      <button class=" border border-dark   custom-hover-1  p-1 me-5   login-register-btn"
                                          data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"
                                          id="login-signup-btn">
                                          Login/Sign up
                                      </button>
                                      @endif

                     

                     <span class=" position-relative">
                             <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                             <span  class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-counter-badge">

                             </span>
                    </span>

                     <!-- removable script -->
                     <!-- <script>
                     const loginSignUpBtn = document.getElementById('login-signup-btn');
                     const loggedInState = document.getElementById('logged-in-state');
                     const logOut = document.getElementById('logOut');
                     loggedInState.style.display = 'none';

                     loginSignUpBtn.addEventListener('click', () => {
                         loginSignUpBtn.style.display = "none";
                         loggedInState.style.display = "block";
                     })
                     logOut.addEventListener('click', () => {
                         loginSignUpBtn.style.display = " block";
                         loggedInState.style.display = "none";
                     })
                     </script> -->
                     <!-- removable script end-->

                 </div>



             </div>
         </div>

     </header>
     <!-- offcanvas body -->
     <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
         <div class="offcanvas-header justify-content-end">

             <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
             <div class="d-flex justify-content-around">
                 <p class="fs-1 offcanvas-item">
                     <a href="{{route('customer_login')}}">Become Our Customer
                         <i class="fa-solid fa-right-long"></i>
                     </a>

                 </p>
                 <p class="fs-1 offcanvas-item">
                     <a href="{{route('shop_login')}}"> Create a Shop Account
                         <i class="fa-solid fa-right-long"></i>
                     </a>
                 </p>
             </div>
         </div>
     </div>

 </main>
