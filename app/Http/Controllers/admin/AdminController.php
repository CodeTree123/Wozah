<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\SubCategory;
use Image;
use Carbon\carbon;
class AdminController extends Controller
{
    //
    public function index(){
      return view('admin.index');
    }

    public function category_form(){
      $lists=category::all();
      return view('admin.category.category_form',compact('lists'));
    }
//post category
    public function category_post(Request $request){
      $category=category::create([
        'auth_id'=>$request->auth_id,
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
      $subcat=SubCategory::create([
        'auth_id'=>$request->auth_id,
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
}
