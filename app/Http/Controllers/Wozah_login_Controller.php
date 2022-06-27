<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
class Wozah_login_Controller extends Controller
{
    //customer
    public function login_new_customer(Request $request){
    if(Auth::attempt(['phone' => request('phone'), 'password' => request('password')])){
      // return Redirect::index();
      return redirect()->route('content');
    }
    else{
        return Redirect::back ();
    }
}
//shop
    public function login_new_shop(Request $request){
    if(Auth::attempt(['id' => request('id'), 'password' => request('password')])){
      // return Redirect::index();
      return redirect()->route('edit_shop_profile');
    }
    else{
        return Redirect::back ();
    }
    }
}
