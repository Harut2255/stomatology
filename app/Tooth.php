<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tooth extends Model
{
    public function visit(){
        return $this->belongsTo('App\Visit');
    }
}
