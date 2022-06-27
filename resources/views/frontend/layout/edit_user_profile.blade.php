@extends('frontend.master')
@section('content')

<div class="container-fluid container-parent">
    <section class="mb-4">
        <div class="row mx-0">
            <div class="col-lg-3">
                <div class="d-flex flex-column ">
                    <button type="button" class="btn btn-light border-bottom my-2"  id="customer_personal_info_section_btn">My Information</button>
                    <button type="button" class="btn btn-light border-bottom my-2" id="customer_payment_info_section_btn">Payment Information</button>
                </div>
            </div>
            <div class="col-lg-9 ">
                <div class="toggle-segment-1 mt-2" id="customer_personal_info_section">
                    <h2>Update Your Personal Information</h2>
                    <!--Personal Information Update form   -->
                    <form class="row g-3" action="{{route('profile_update')}}" method="post">
                      @csrf

                      <div class="{{old('verify') ? 'd-none': 'row g-3'}} ">
                        <div class="col-12">
                          <input type="hidden" class="form-control" name="id" value="{{ Auth::user()->id}}">
                            <label for="c_address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="customer_address" value="{{old('customer_address',$list[0]->customer_address)}}" id="c_address">
                        </div>

                        <div class="col-6">
                            <label for="c_street_name" class="form-label">Street Name</label>
                            <input type="text" class="form-control" name="customer_street_name" value="{{old('customer_street_name',$list[0]->customer_street_name)}}" id="c_street_name">
                        </div>
                        <div class="col-6">
                            <label for="c_street_number" class="form-label">Street Number</label>
                            <input type="number" class="form-control" name="customer_street_number" value="{{old('customer_street_number',$list[0]->customer_street_number)}}" id="c_street_number">
                        </div>

                        <div class="col-3">
                            <label for="c_apartment_no" class="form-label">Apt#</label>
                            <input type="text" class="form-control" name="customer_apt" value="{{old('customer_apt',$list[0]->customer_apt)}}" id="c_apartment_no">
                        </div>
                        <div class="col-3">
                            <label for="c_city" class="form-label">City</label>
                            <input type="text" class="form-control" name="customer_city" value="{{old('customer_city',$list[0]->customer_city)}}" id="c_city">
                        </div>
                        <div class="col-3">
                            <label for="c_state" class="form-label">State</label>
                            <input type="text" class="form-control" name="customer_state" value="{{old('customer_state', $list[0]->customer_state)}}" id="c_state">
                        </div>
                        <div class="col-3">
                            <label for="c_zip" class="form-label">Zip</label>
                            <input type="number" class="form-control" name="customer_zip" value="{{old('customer_zip', $list[0]->customer_zip)}}" id="c_zip">
                        </div>

                        <div class="col-12">
                            <label for="c_phone" class="form-label">Phone No.</label>
                            <input type="tel" class="form-control" name="phone" value="{{old('phone',$list[0]->phone)}}" id="c_phone" placeholder="Phone">
                        </div>

                        <div class="col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="m" value="male">
                                <label class="form-check-label" for="m">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="f" value="female">
                                <label class="form-check-label" for="f">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="preferNot" value="not_preferred">
                                <label class="form-check-label" for="preferNot">Prefer Not to Say</label>
                            </div>
                          </div>
                          </div>
                            @if(old('verify'))
                            <div class="col-12">
                                <label for="otp" class="form-label">Verify Otp.</label>
                                <input type="tel" class="form-control" name="otp" value="" id="otp" placeholder="Otp">
                            </div>

                            <div class="card-header">Didn't get otp ?? click here</div>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">Resend Otp</button>
                            </div>
                            @endif


                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>

                    <!--Personal Information  form end  -->
                </div>


                <div class="toggle-segment-2 mt-2" id="customer_payment_info_section">
                    <h2>Edit Your Payment Information</h2>
                    <!--Payment Information  form -->
                    <form class="row g-3">

                        <div class="col-6">
                            <label for="c_cc" class="form-label">CC #</label>
                            <input type="numbder" class="form-control" id="c_cc">
                        </div>
                        <div class="col-6">
                            <label for="c_card_exp" class="form-label">Exp</label>
                            <input type="month" class="form-control" id="c_card_exp">
                        </div>

                        <div class="col-6">
                            <label for="c_cvv" class="form-label">CVV</label>
                            <input type="number" class="form-control" id="c_cvv">
                        </div>

                        <div class="col-6">
                            <label for="c_payment_zip" class="form-label">ZIP</label>
                            <input type="number" class="form-control" id="c_payment_zip">
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    <!--Payment Information  form end-->

                </div>

            </div>
        </div>
    </section>
</div>
<script>

    const customer_personal_info_section_btn = document.getElementById('customer_personal_info_section_btn');

    const customer_payment_info_section_btn = document.getElementById('customer_payment_info_section_btn');

    const customer_personal_info_section = document.getElementById('customer_personal_info_section');
    const customer_payment_info_section = document.getElementById('customer_payment_info_section');

    customer_personal_info_section_btn.addEventListener("click", ()=>{
                    console.log("clicked");
                            customer_personal_info_section.style.display = "block";
                            customer_payment_info_section.style.display = "none";
                    });

    customer_payment_info_section_btn.addEventListener("click", ()=>{
                    console.log("clicked");
                            customer_personal_info_section.style.display = "none";
                            customer_payment_info_section.style.display = "block";
                    });
</script>




</div>
</div>

@endsection
