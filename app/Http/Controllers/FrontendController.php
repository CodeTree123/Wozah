<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop_Information;
use App\Models\User;
use App\Models\category;
use App\Models\SubCategory;
use App\Models\Service;
class FrontendController extends Controller
{

    //
     public function index()
    {
        return view('frontend.master');
    }
     public function content()
    {
      // $services1=category::where('cat_name','Salon Service')->get();
      // $services2=category::where('cat_name','Skin Care Service')->get();
        $shop=Service::all();
        return view('frontend.layout.content',compact('shop'));
    }
     public function customer_registration()
    {
        return view('frontend.layout.customer_registration');
    }
    public function customer_login()
    {
        return view('frontend.layout.customer_login');
    }
    public function edit_user_profile()
    {
        $list=User::where('id', auth()->id())->get();
        return view('frontend.layout.edit_user_profile',compact('list'));
    }
    public function edit_shop_profile()
    {
      $lists=category::where('auth_id', auth()->id())->get();
      $list=User::where('id', auth()->id())->get();

        //dd($list);
         $shop=Shop_Information::where('user_id', auth()->id())->where('verified_at', 1)->first();
         //dd($shop);

        if($shop){

          return view('admin.category.category_form',compact('lists'));
          //$status="Verified";
        }else{

          return view('frontend.layout.edit_shop_profile',compact('list'));
        }

        //dd($shop);
       //return view('frontend.layout.edit_shop_profile',compact('list'));
    }

     public function shop_registration()
    {
        return view('frontend.layout.shop_registration');
    }
     public function shop_login()
    {
        return view('frontend.layout.shop_login');
    }
     public function about_us()
    {
        return view('frontend.layout.about_us');
    }
     public function faq()
    {
        return view('frontend.layout.faq');
    }

     public function contact_us()
    {
        return view('frontend.layout.contact_us');
    }

     public function service_list()
    {
        return view('frontend.layout.service_list');
    }
     public function service_detail()
    {
        return view('frontend.layout.service_detail');
    }
    function login(){
        return view('auth.login');
    }
}
