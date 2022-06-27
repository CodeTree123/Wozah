@extends('frontend.master')
@section('content')
<div class="container-fluid container-parent">

    <section>
        <div class="container my-3">
            <div class="row">

                <!--Login Form -->
                <div class="col-lg-6 mx-auto">
                    <h5 class=" " id=" ">New Shop Registration </h5>

                    <form action="{{route('new_register')}}" method="post">
                      @csrf
                        <div class="form-floating mb-3">
                          <input type="hidden" class="form-control new-form-control" name="role_id" value="2"
                              required>
                            <input type="text" class="form-control new-form-control" name="shop_name" id="bName" placeholder=" "
                                required>
                            <label for="bName">Shop Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control new-form-control" name="email" id="bEmail" placeholder=" "
                                required>
                            <label for="bEmail">Shop Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control new-form-control" name="phone" id="bPhone" placeholder=" "
                                required>
                            <label for="bPhone">Contact Number</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control new-form-control" name="shop_address" id="bAddress" placeholder=" "
                                required>
                            <label for="bAddress">Shop Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control new-form-control" name="password" id="bPassword"
                                    placeholder="Password" autocomplete="on" required>
                                <label for="bPassword"></label>

                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="input-group" id="show_hide_password">
                                <input type="password" class="form-control new-form-control" name="password_confirmation" id="bConfirmPassword"
                                    placeholder="Confirm Password" autocomplete="on" required>
                                <label for="bConfirmPassword"></label>
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
                        Already Have a shop account?
                    <a href="{{route('shop_login')}}">
                        <p class="font-weight-bold d-inline text-primary">Login to your shop account</p>
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
