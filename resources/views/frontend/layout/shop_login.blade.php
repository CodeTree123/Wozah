@extends('frontend.master')
@section('content')
    <title>US PROJECT </title>



  <div class="container-fluid container-parent">


    <section>
       <div class="container my-3">
        <div class="row">

                <!--Login Form -->
           <div class="col-lg-6 mx-auto">
                <h5 class=" " id=" ">Login to your shop account </h5>
                </h5>
               <form action="{{route('newlogin_shop')}}" method="post">
                 @csrf
               <div class="form-floating mb-3">
                    <input type="tel" class="form-control new-form-control" name="id"  id="shopID" placeholder=" " required>
                    <label for="shopID">Shop ID</label>
                </div>

                <div class="form-floating " id="show_hide_password">

                    <input type="password" class="form-control new-form-control" name="password" id="bPassword" placeholder="Password" autocomplete="on" required>
                    <label for="bPassword" class="  password-label">
                        Password
                    </label>
                        <i class="fa fa-eye-slash toggle-password" aria-hidden="true"></i>


                </div>

               <button type="submit" class="btn btn-primary my-4"  >Login</button>
               </form>
               <a href="{{route('shop_registration')}}" id="">Need a account for your shop?
                <span class="text-primary">Please Register Your shop</span>
                </a>

           </div>
            </div>


            <a href="{{route('edit_shop_profile')}}" class="text-danger  ">
                         Edit shop profile
                        </a>
    </div>



    </section>

    </div>
  </div>


  <script>


  </script>
@endsection
