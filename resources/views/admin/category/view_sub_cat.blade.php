@extends('layouts.shop_admin_master')
@section('content')
        <div class="content">
<a href="{{route('category_form')}}" class="btn btn-primary m-2"><i class="fa fa-home me-2"></i>Home</a>
  <h4>Subcategory Details</h4>
                 <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Service Lists</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Category Type</th>
                                            <th scope="col">Subacategory Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($lists as $list)
                                        <tr>
                                            <th scope="row">{{$list->id}}</th>
                                            <td>{{$list->relationBetweenCategory->cat_name}}</td>
                                            <td>{{$list->relationBetweenCategory->cat_type}}</td>
                                            <td>{{$list->subcat_name}}</td>
                                            <td>{{$list->price}}</td>
                                            <td>
                                            <img src="{{ asset('uploads/categories') }}/{{ $list->relationBetweenCategory->file }}" alt="">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>
@endsection
