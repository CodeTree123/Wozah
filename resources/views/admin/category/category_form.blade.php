@extends('layouts.admin_master')
@section('content')
<body>
  <div class="content">
    <a href="{{route('view_subcat')}}" class="btn btn-primary m-2"><i class="fa fa-home me-2"></i>View Service List</a>
    <div class="container-fluid pt-4 px-4">
       <div class="row g-4">
          <div class="col-sm-12 col-xl-6">
              <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add Category</h6>
                <form action="{{route('category_post')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3">
                      <input type="hidden" name="auth_id" value="{{Auth::user()->id}}" class="form-control" id="auth_id">
                        <label for="cat_name" class="form-label">Category Name</label>
                        <input type="text" name="cat_name" class="form-control" id="cat_name">
                    </div>
                    <div class="mb-3">
                        <label for="cat_type" class="form-label">Category Type</label>
                        <input type="text" name="cat_type" class="form-control" id="cat_type">
                    </div>
                    <h6 class="mb-4">File Input</h6>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Choose a related picture</label>
                                <input class="form-control bg-dark" name="file" type="file" id="formFile">
                            </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Add Subcategory</h6>
                @if ($message = Session::get('success'))
                         <div class="alert alert-success alert-block">
                             <button type="button" class="close" data-dismiss="alert">×</button>
                                 <strong>{{ $message }}</strong>
                         </div>
                         @endif
                <form action="{{route('subcategory_post')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="row mb-3">
                      <input type="hidden" name="auth_id" value="{{Auth::user()->id}}" class="form-control" id="auth_id1">
                        <label for="cat_id" class="col-sm-2 col-form-label">Category Id</label>
                        <div class="col-sm-10">
                            <select class="form-control show-tick ms select2" type="input"
                                                data-placeholder="Category" id="cat_id" name="cat_id">
                              <option>Select category name</option>
                              @foreach ($lists as $list)
                              <option type="text" class="form-control" value="{{ $list->id }}">{{ $list->cat_type }}</option>
                              @endforeach

                           </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="subcat" class="col-sm-2 col-form-label">Sub Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="subcat_name" class="form-control" id="subcat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                        <input type="text" name="price" class="form-control" id="price">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        </div>
     </div>
   </div>
 </div>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 <script type="text/javascript">

       $("#cat_id").select2({
             placeholder: "Category",
             allowClear: true
         });
 </script>
</body>

@endsection
