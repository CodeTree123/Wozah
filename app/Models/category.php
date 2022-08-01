<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
      'auth_id',
      'cat_name',
      'cat_type',
      'file',
    ];
    function relationBetweenService()
    {

    return $this->hasOne('App\Models\Service','auth_id','auth_id');
    }
    function relationBetweenSubCategory()
    {

    return $this->hasOne('App\Models\SubCategory','auth_id','auth_id');
    }
    function relationBetweenUser()
    {

    return $this->hasOne('App\Models\User','id','auth_id');
    }
}
