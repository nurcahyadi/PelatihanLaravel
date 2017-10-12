<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homestay extends Model
{
    protected $table=[
      'NamaHomestay',
      'Alamat',
      'Type',
      'Price'
    ];

    public function transactions(){
      return $this->hasMany('App\transactions');
    }
    public function roles(){
      return $this->belongTo('App\roles');
    }

}
