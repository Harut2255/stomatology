<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'surname',
        'patronymic',
        'date',
        'sex',
        'place',
        'email',
        'tel',
        'allergic',
        'bleeding',
        'new_illness',
        'pregnant',
        'doctor',
        'created_at'
    ];

    public function illnesses(){
        return $this->belongsToMany('App\Illness','customer_illness','customer_id','illness_id');
    }

    public function visits(){
        return $this->hasMany('App\Visit','customer_id','id');
    }
}
