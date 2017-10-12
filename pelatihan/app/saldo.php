<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saldo extends Model
{
    protected $table = [
      'Total'
    ];

        public function roles(){
          return $this->belongTo('App\roles');
        }
}
