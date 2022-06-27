@extends('frontend.master')
@section('content')

<div class="container-fluid container-parent">


    <section>
        <div class="container my-3">
            <div class="row">

                <!--Login Form -->
                <div class="col-lg-6 mx-auto">
                    <h5 class=" " id=" ">New Customer Registration </h5>

                    <form action="{{route('new_register')}}" method="post">
                      @csrf
                        <div class="form-floating mb-3">
                          <input type="hidden" class="form-control new-form-control" name="role_id" value="1"
                              required>
                            <input type="text" class="form-control new-form-control" name="first_name" id="fName" placeholder=" "
                                required>
                            <label for="fName">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control new-form-control" name="last_name" id="lName" placeholder=" "
                                required>
                            <label for="lName">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control new-form-control" name="email" id="email" placeholder=" "
                                required>
                            <label for="email">Enter Your Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control new-form-control" name="phone" id="loginPhone" placeholder=" "
                                required>
                            <label for="loginPhone">Phone Number</label>
                        </div>

<div class="form-floating mb-3">
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control new-form-control" name="password" id="cPassword"
                                    placeholder="Password" autocomplete="on" required>
                                <label for="cPassword"></label>

                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control new-form-control" name="password_confirmation" id="cConfirmPassword"
                                    placeholder="Confirm Password" autocomplete="on" required>
                                <label for="cConfirmPassword"></label>
                                <br>

                            </div>
                       <div class="my-3">
                       <a href="" id="show_hide_password" class="">
                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            Show Password
                        </a>
                       </div>
                        </div>



                        <div class="input-group ">
                            <button type="submit" class="btn btn-primary ">Register</button>
                        </div>

                    </form>
                    <a href="{{route('customer_login')}}">
                        Already Have a account?
                        <p class="font-weight-bold d-inline text-primary">Login</p>
                    </a>
                </div>
            </div>


        </div>



    </section>





</div>
</div>



<script>

</script>
@endsection
