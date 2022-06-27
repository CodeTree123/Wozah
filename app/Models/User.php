<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'first_name',
      'last_name',
      'shop_name',
      'shop_address',
      'phone',
      'role_id',
      'email',
      'password',
      'b_legal_name',
      'b_dba',
      'street_number_b',
      'apt_b',
      'city_b',
      'state_b',
      'zip_b',
      'street_number_c',
      'apt_c',
      'city_c',
      'state_c',
      'zip_c',
      'customer_address',
      'customer_street_name',
      'customer_street_number',
      'customer_apt',
      'customer_city',
      'customer_state',
      'customer_zip',
      'gender',
      'otp',
      'verified_at',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
