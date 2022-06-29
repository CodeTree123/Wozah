<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
class Wozah_register_Controller extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

        use RegistersUsers;

        /**
         * Where to redirect users after registration.
         *
         * @var string
         */
        protected $redirectTo = RouteServiceProvider::HOME;

        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('guest');
        }

        /**
         * Get a validator for an incoming registration request.
         *
         * @param  array  $data
         * @return \Illuminate\Contracts\Validation\Validator
         */
    public function new_register(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'phone' => 'required',
        'password' => 'required',
        'password_confirmation' => 'required|same:password',
    ]);
    if ($validator->fails()) {
        return response()->json(['error'=>$validator->errors()], 401);
    }
        $user= User::create([
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
          'shop_name' => $request->shop_name,
          'shop_address' => $request->shop_address,
          'email' => $request->email,
          'phone' => $request->phone,
          'role_id' => $request->role_id,
          'password'=>Hash::make($request['password']),
          'b_legal_name' => $request->b_legal_name,
          'b_dba' => $request->b_dba,
          'street_number_b' => $request->street_number_b,
          'apt_b' => $request->apt_b,
          'city_b' => $request->city_b,
          'state_b' => $request->state_b,
          'zip_b' => $request->zip_b,
          'street_number_c' => $request->street_number_c,
          'apt_c' => $request->apt_c,
          'city_c' => $request->city_c,
          'state_c' => $request->state_c,
          'zip_c' => $request->zip_c,
          'created_at'   =>Carbon::now()
        ]);

        //dd($user);

        return back();
    }


}
