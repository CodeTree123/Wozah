<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Otp_Verify;
use Auth;
use Carbon\Carbon;

class Otp_verification
{

    public function handle(Request $request, Closure $next)
    {
      if ($request->otp) {

        $phone = Otp_Verify::where(['mobile' => $request->phone])->first();
        if (!empty($phone)) {
          //otp ckeck
          if ($phone && $phone->otp == $request->otp) {
            $phone->update([
              'otp' => '',
              'verified_at' => 1
            ]);
            
          }else{
            dd("error");
          }

        }

        return $next($request);
      } else {
        $phoneinfo = Otp_Verify::where('mobile', $request->phone)->first();
        $otp = rand(1000,9999);
          if(!$phoneinfo){
            Otp_Verify::create([
             'mobile'=>$request->phone,
             'otp' =>  $otp,
             'verified_at' => 0
             ]);
          }else{
            $phoneinfo->update([
             'otp' =>  $otp,
             'verified_at' => 0
             ]);
          }



          $request->request->add(['verify' => true]);
          return redirect()->back()->withInput();
      }
    }
}
