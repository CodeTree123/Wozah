<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __construct()
    {
        $this->middleware(['verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //   $permission=User::where('role_id','=',1)->first();
      //
      // if($permission){
      //   return redirect()->route('edit_shop_profile');
      //
      // }else{
      //   return redirect()->route('content');
      // }
        return view('home');
    }
}
