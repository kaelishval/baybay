<?php

namespace App\Http\Controllers;

use App\Classe;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function home(Request $request)
    {
        $classes=Classe::where('active',$request->query('active',1))->get();
        
                 return view('attendance.attendancehome',compact('classes')); 
    }
    
}
