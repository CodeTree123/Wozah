@extends('layouts.shop_admin_master')
@section('content')
<body>
  <div class="d-flex justify-content-between">
    <a href="{{route('category_form')}}" class="btn btn-primary m-2"><i class="fa fa-home me-2"></i>Home</a>
    <a href="{{route('view_service')}}" class="btn btn-primary m-2"><i class="fa fa-home me-2"></i>Service List</a>
  </div>
<div class="col-sm-6 col-xl-6 mx-auto">
           <form action="{{route('post_service')}}" method="post" enctype="multipart/form-data">
             @csrf
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Add Service</h6>
                            <div class="form-floating mb-3">
                              <select class="form-control show-tick ms select2" type="input"
                                                  data-placeholder="Category" id="cat_id" name="cat_id">
                                <option selected>Select category name</option>
                                @foreach ($category as $list)
                                <option type="text" class="form-control" value="{{ $list->id }}">{{ $list->cat_type }}</option>
                                @endforeach

                             </select>
                                <label for="floatingSelect">Works with selects</label>
                            </div>
                            <div class="form-floating mb-3">
                              <select class="form-control show-tick ms select2" type="input"
                                                  data-placeholder="SubCategory" id="subcat_id" name="subcat_id">
                                    <option selected>Select SubCategory Name</option>
                                    @foreach ($SubCategory as $list)
                                    <option value="{{ $list->id }}">{{ $list->subcat_name }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Works with selects</label>
                            </div>

                            <div class="input-group">
                                <span class="input-group-text">Additional Information</span>
                                <textarea class="form-control" name="add_info1" aria-label="With textarea2"></textarea>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Additional Information</span>
                                <textarea class="form-control" name="add_info2" aria-label="With textarea3"></textarea>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Additional Information</span>
                                <textarea class="form-control" name="add_info3" aria-label="With textarea4"></textarea>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Additional Information</span>
                                <textarea class="form-control" name="add_info4" aria-label="With textarea5"></textarea>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Additional Information</span>
                                <textarea class="form-control" name="add_info5" aria-label="With textarea1"></textarea>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
                    <script type="text/javascript">

                          $("#subcat_id").select2({
                                placeholder: "SubCategory",
                                allowClear: true
                            });
                            $("#cat_id").select2({
                                  placeholder: "Category",
                                  allowClear: true
                              });
                    </script>
                   </body>

@endsection
