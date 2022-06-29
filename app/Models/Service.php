<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [

      'auth_id',
      'cat_id',
      'subcat_id',
      'add_info1',
      'add_info2',
      'add_info3',
      'add_info4',
      'add_info5',
    ];
    function relationBetweenCategory()
    {

    return $this->hasOne('App\Models\category','id','cat_id');
    }
    function relationBetweenSubCategory()
    {

    return $this->hasOne('App\Models\SubCategory','id','subcat_id');
    }
}
