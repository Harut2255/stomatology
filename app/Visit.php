<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'customer_id',
        'mouth_state',
        'kc_type',
        'examination',
        'gigienik',
        'reason_subject',
        'reason_object',
        'diagnosis',
        'treat',
        'price',
        'primaryprice',
        'debt',
        'doctor',
        'code',
        'images',
        'images2',
        'images3',
        'images4',
        'created_at'
    ];

    public function customer(){
        return $this->belongsTo('App\Customer');
    }

    public function teeth(){
        return $this->hasMany('App\Tooth','visit_id','id');
    }
}
