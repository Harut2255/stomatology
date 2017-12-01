<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{



    public function customers(){
        return $this->belongsToMany('App\Customer','customer_illness','illness_id','customer_id');
    }
}
