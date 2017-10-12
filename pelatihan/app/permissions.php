<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    protected $table =[
        'Description'
    ];

    public function roles(){
      return $this->belongTo('App\roles');
    }
}
