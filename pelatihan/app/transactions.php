<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    protected $table=[
      'CheckIN',
      'CheckOut',
      'Total'
    ];

        public function homestay(){
          return $this->belongTo('App\homestay');
        }

            public function roles(){
              return $this->belongTo('App\roles');
            }
}
