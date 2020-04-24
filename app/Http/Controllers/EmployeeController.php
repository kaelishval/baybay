<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home()
    {
                 return view('employee.employeehome'); 
    }
    
    public function add()
    {
       

       $employee = Employee::create($this->validatedData());
        
       $this->storeImage($employee);

             return view('employee.addemployee', compact('employee')); 
    }       


    public function list(Request $request)
    {
        $employees=Employee::where('active',$request->query('active',1))->get();
        
                    
        return view('employee.employeelist', compact ('employees'));    
    }

    public function show(Employee $employee)
    {
        return view('employee.employeeshow', compact('employee'));
    }
    public function edit(Employee $employee)
    {
        return view('employee.employeeedit',compact('employee'));
    }
    public function update(Employee $employee)
    {
       
       $employee->update($this->validatedData());

       $this->storeImage($employee);
       
             return view('employee.employeeshow',compact('employee')); 
    }
    public function destroy(Employee $employee)
    {
            $employee->delete();

            return redirect('/employeelist');
    }
    private function validatedData()
    {
        return tap(request()->validate([
            'id_number'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'contact_number'=>'required',
            'position'=>'required',
            'address'=>'required',
            'age'=>'required',
        ]), function () {
            if (request()->hasFile('image')) {

                request()->validate([
                    'image'=>'file|image|max:5000',
                ]);
            }
        });
    }
       
    private function storeImage($employee)
    {
        if(request()->has('image')) {
            $employee->update([
                'image'=>request()->image->store('uploads','public'),
            ]);
        }
    }
}
