<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table=[
      'User',
      'Admin'
    ];

    public function homestay(){
      return $this->hasOne('App\homestay');
    }

        public function permissions(){
          return $this->hasOne('App\permissions');
        }

            public function saldo(){
              return $this->hasOne('App\saldo');
            }

                public function transactions(){
                  return $this->hasOne('App\transactions');
                }
}
