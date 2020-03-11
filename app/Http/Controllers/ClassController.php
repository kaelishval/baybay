<?php

namespace App\Http\Controllers;

use App\Classe;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function home()
    {
                 return view('class.classhome'); 
    }
    
    public function add()
    {
       

       $class = Classe::create($this->validatedData());

             return view('class.addclass', compact('class')); 
    }       


    public function list(Request $request)
    {
        $classes=Classe::where('active',$request->query('active',1))->get();
        
                    
        return view('class.classlist', compact ('classes'));    
    }

    public function show(Classe $class)
    {
        return view('class.classshow', compact('class'));
    }
    public function edit(Classe $class)
    {
        return view('class.classedit',compact('class'));
    }
    public function update(Classe $class)
    {
       
       $class->update($this->validatedData());
       
             return view('class.classshow',compact('class')); 
    }
    public function destroy(Classe $class)
    {
            $class->delete();

            return redirect('/classlist');
    }
    protected function validatedData()
    {
     
        return request()->validate([
            'teacher'=>'required',
            'subject'=>'required',
            'time_start'=>'required',
            'time_end'=>'required',
            'building'=>'required',
            'floor'=>'required',
            'room'=>'required'
        ]);

    }
               
}
