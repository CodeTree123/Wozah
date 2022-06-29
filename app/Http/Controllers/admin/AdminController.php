<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\category;
use App\Models\SubCategory;
use App\Models\Service;
use Image;
use Carbon\carbon;
class AdminController extends Controller
{
    //
    public function index(){
      return view('admin.index');
    }

    public function category_form(){
      $lists=category::where('auth_id', auth()->id())->get();
      return view('admin.category.category_form',compact('lists'));
    }
//post category
    public function category_post(Request $request){
      $validator = Validator::make($request->all(), [
        'cat_name' => 'required',
        'cat_type' => 'required',
        'file' => 'required',
        ]);
    if ($validator->fails()) {
        return back()->with('success1','fillup the input field.');
    }
      $category=category::create([
        'auth_id'=>auth()->id(),
        'cat_name'=>$request->cat_name,
        'cat_type'=>$request->cat_type,
        'file'=>$request->file,
        'created_at'=>Carbon::now()
      ]);
      if($request->file('file')){
            $file= $request->file('file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('uploads/categories/'), $filename);
            $category['file']= $filename;
        }
        $category->save();
      return back();
    }
//post subcategory
    public function subcategory_post(Request $request){
      $validator = Validator::make($request->all(), [
        'cat_id' => 'required',
        'subcat_name' => 'required',
        'price' => 'required',
        ]);
    if ($validator->fails()) {
        return back()->with('success1','fillup the input field.');
    }
      $subcat=SubCategory::create([
        'auth_id'=>auth()->id(),
        'cat_id'=>$request->cat_id,
        'subcat_name'=>$request->subcat_name,
        'price'=>$request->price,
        'created_at'=>Carbon::now()
        ]);
        return back()->with('success','Data Added Successfully.');
    }

    public function view_subcat(){
      $lists=SubCategory::where('auth_id',auth()->id())->get();
      return view('admin.category.view_sub_cat',compact('lists'));
    }

    //add service
    public function service_form(){
      $category=category::where('auth_id', auth()->id())->get();
      $SubCategory=SubCategory::where('auth_id',auth()->id())->get();
      return view('admin.service.service_form',compact('category','SubCategory'));
    }

    public function post_service(Request $request){
      $service=Service::create([
        'auth_id'=>auth()->id(),
        'cat_id'=>$request->cat_id,
        'subcat_id'=>$request->subcat_id,
        'add_info1'=>$request->add_info1,
        'add_info2'=>$request->add_info2,
        'add_info3'=>$request->add_info3,
        'add_info4'=>$request->add_info4,
        'add_info5'=>$request->add_info5,
        'created_at'=>Carbon::now()
      ]);
      return back()->with('success','Data have Successfully Added.');
    }

    public function view_service(){
      $lists=Service::where('auth_id',auth()->id())->get();
      return view('admin.service.view_service',compact('lists'));
    }
}
