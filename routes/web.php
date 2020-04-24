<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Class Routes
Route::get('/viewaddclass', function () {
    return view('class.addclass');
});
Route::get('/classhome','ClassController@home');  
Route::post('/addclass','ClassController@add');
Route::get('/classlist','ClassController@list');
Route::get('/classshow/{class}','ClassController@show');
Route::get('/classshow/{class}/classedit','ClassController@edit');
Route::patch('/classshow/{class}','ClassController@update');
Route::delete('/classdelete/{class}','ClassController@destroy');

//End of Class Routes

//Student Routes
Route::get('/viewaddstudent', function () {
    return view('student.addstudent');
});
Route::get('/studenthome','StudentController@home');  
Route::post('/addstudent','StudentController@add');
Route::get('/studentlist','StudentController@list');
Route::get('/studentshow/{student}','StudentController@show');
Route::get('/studentshow/{student}/studentedit','StudentController@edit');
Route::patch('/studentshow/{student}','StudentController@update');
Route::delete('/studentdelete/{student}','StudentController@destroy');

//End of Student Routes
//start of employee Routes
Route::get('/viewaddemployee', function () {
    return view('employee.addemployee');
});
Route::get('/employeehome','EmployeeController@home');  
Route::post('/addemployee','EmployeeController@add');
Route::get('/employeelist','EmployeeController@list');
Route::get('/employeeshow/{employee}','EmployeeController@show');
Route::get('/employeeshow/{employee}/employeeedit','EmployeeController@edit');
Route::patch('/employeeshow/{employee}','EmployeeController@update');
Route::delete('/employeedelete/{employee}','EmployeeController@destroy');
//End of Employee Routes
//Start of Attendace
Route::get('/attendancehome','AttendanceController@home'); 



//End of Attendance Routes