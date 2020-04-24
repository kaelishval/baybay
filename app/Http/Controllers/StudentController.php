<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home()
    {
                 return view('student.studenthome'); 
    }
    
    public function add()
    {
       

       $student = Student::create($this->validatedData());

       $this->storeImage($student);

             return view('student.addstudent', compact('student')); 
    }       


    public function list(Request $request)
    {
        $students=Student::where('active',$request->query('active',1))->get();
        
                    
        return view('student.studentlist', compact ('students'));    
    }

    public function show(Student $student)
    {
        return view('student.studentshow', compact('student'));
    }
    public function edit(Student $student)
    {
        return view('student.studentedit',compact('student'));
    }
    public function update(Student $student)
    {
       
       $student->update($this->validatedData());

       $this->storeImage($student);
       
             return view('student.studentshow',compact('student')); 
    }
    public function destroy(Student $student)
    {
            $student->delete();

            return redirect('/studentlist');
    }
    private function validatedData()
    {
        return tap(request()->validate([
            'id_number'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'contact_number'=>'required',
            'section_name'=>'required',
            'grade_level'=>'required',
            'mothername'=>'required',
            'mother_occupation'=>'required',
            'mother_cnumber'=>'required',
            'fathername'=>'required',
            'father_occupation'=>'required',
            'father_cnumber'=>'required',
        ]), function () {
            if (request()->hasFile('image')) {

                request()->validate([
                    'image'=>'file|image|max:5000',
                ]);
            }
        });
    }
       
    private function storeImage($student)
    {
        if(request()->has('image')) {
            $student->update([
                'image'=>request()->image->store('uploads','public'),
            ]);
        }
    }
}
