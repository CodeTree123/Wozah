<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Otp_Verify;
use App\Models\Shop_Information;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //
    function shop_update(Request $request){

      $user= User::findOrFail($request->id)->update([
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

      ]);

      return back()->with('success','user information have been successfully Updated.');
  }

  function profile_update(Request $request){


    $user= User::findOrFail($request->id)->update([
      'customer_address' => $request->customer_address,
      'customer_street_name' => $request->customer_street_name,
      'customer_street_number' => $request->customer_street_number,
      'customer_apt' => $request->customer_apt,
      'customer_city' => $request->customer_city,
      'customer_state' => $request->customer_state,
      'customer_zip' => $request->customer_zip,
      'street_number_c' => $request->street_number_c,
      'gender' => $request->gender,
      'phone' => $request->phone,

    ]);


    return back()->with('success','user information have been successfully Updated.');
}

//otp blade

    public function otp_blade(){
      return view('otp_blade');
    }

    public function match_otp(Request $request){
    //Log::info($request);

    $phoneinfo = Otp_Verify::where('mobile', $request->phone)->first();

    // $time=Carbon::now()->diffInSeconds($phoneinfo->updated_at);
    // if($time >60){
    //   return redirect()->route('match_otp')->with('Failed','your time is up!! Enter your mobile number again');
    // }
    if ($phoneinfo && $phoneinfo->otp == $request->otp) {
      $phoneinfo->update([
        'otp' => '',
        'verified_at' => 1
      ]);
      //return redirect()->route('profile_update');
    }

    //return redirect()->back();

}

        public function sendOtp(Request $request){

        $otp = rand(1000,9999);
         //$response=$this->send_sms($request->phone,$otp);
          $phone = Otp_Verify::where(['mobile' => $request->phone])->first();
          if (!empty($phone)) {
            $phone->update([
              'isverified' => 0,
                  'otp' => $otp
            ]);
          }
            else{
              $user = Otp_Verify::create([
                'mobile'=>$request->phone,
                'otp' => $otp
                ]);
            }

        return back();
        }


  //file upload
  public function fileUpload(Request $request){
        // $req->validate([
        //   'b_ien' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        //   'b_certificate' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        //   'b_registration' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        //   'e_certificate' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        //   'b_insurance' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        //   'b_workers' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        //   'driver_license' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        // ]);
      $Shop=Shop_Information::create([
        'user_id'=>$request->user_id,
        'b_ien'=>$request->b_ien,
        'b_certificate'=>$request->b_certificate,
        'b_registration'=>$request->b_registration,
        'e_certificate'=>$request->e_certificate,
        'nail_salon'=>$request->nail_salon,
        'b_insurance'=>$request->b_insurance,
        'b_workers'=>$request->b_workers,
        'driver_license'=>$request->driver_license,
        'verified_at'=>0,
      ]);
      if($request->file('b_ien')){
            $file= $request->file('b_ien');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('uploads/shop_pdf/'), $filename);
            $Shop['b_ien']= $filename;
            $Shop->save();
        }
        if($request->file('b_certificate')){
              $file= $request->file('b_certificate');
              $filename= date('YmdHi').$file->getClientOriginalName();
              $file-> move(public_path('uploads/shop_pdf/'), $filename);
              $Shop['b_certificate']= $filename;
              $Shop->save();
          }
          if($request->file('b_registration')){
                $file= $request->file('b_registration');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('uploads/shop_pdf/'), $filename);
                $Shop['b_registration']= $filename;
                $Shop->save();
            }
            if($request->file('e_certificate')){
                  $file= $request->file('e_certificate');
                  $filename= date('YmdHi').$file->getClientOriginalName();
                  $file-> move(public_path('uploads/shop_pdf/'), $filename);
                  $Shop['e_certificate']= $filename;
                  $Shop->save();
              }
              if($request->file('nail_salon')){
                    $file= $request->file('nail_salon');
                    $filename= date('YmdHi').$file->getClientOriginalName();
                    $file-> move(public_path('uploads/shop_pdf/'), $filename);
                    $Shop['nail_salon']= $filename;
                    $Shop->save();
                }
                if($request->file('b_insurance')){
                      $file= $request->file('b_insurance');
                      $filename= date('YmdHi').$file->getClientOriginalName();
                      $file-> move(public_path('uploads/shop_pdf/'), $filename);
                      $Shop['b_insurance']= $filename;
                      $Shop->save();
                  }
                  if($request->file('b_workers')){
                        $file= $request->file('b_workers');
                        $filename= date('YmdHi').$file->getClientOriginalName();
                        $file-> move(public_path('uploads/shop_pdf/'), $filename);
                        $Shop['b_workers']= $filename;
                        $Shop->save();
                    }
                    if($request->file('driver_license')){
                          $file= $request->file('driver_license');
                          $filename= date('YmdHi').$file->getClientOriginalName();
                          $file-> move(public_path('uploads/shop_pdf/'), $filename);
                          $Shop['driver_license']= $filename;
                          $Shop->save();
                      }

                  //dd($Shop);
            return back();
   }
}
