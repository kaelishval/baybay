<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'year',
        'contact',
        'parent_name',
        'pcontact',
    ];

    public function section(){
        return $this->belongsTo('App\Section');
    }
    public function attendace(){
        return $this->belongsTo('App\Section');
    }
}
