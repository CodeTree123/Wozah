<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop_Information extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'b_ien',
      'b_certificate',
      'b_registration',
      'nail_salon',
      'e_certificate',
      'b_insurance',
      'b_workers',
      'driver_license',
      'verified_at',

    ];
}
