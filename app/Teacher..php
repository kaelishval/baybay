<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'attendance_degree', 
        'room_number', 
        'section_id',
    ];

    public function section(){
        return $this->belongsTo('App\Section');
    }
    public function student(){ 
        return $this->belongsToMany('App\Student');
    }
}
