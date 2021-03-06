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

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// Sample code Route::resource('healthcare', 'HealthCareController', ['except' => ['destroy','show','update','create']]);
// Route::get('/{student}/edit', ['as' => 'student.edit', 'uses' => 'UserController@edit']);
// Route::put('/{student}', ['as' => 'student.update', 'uses' => 'UserController@update']);

/*ADMIN PANEL*/
Route::middleware(['admin_type'])->group(function () {
    Route::resource('admin', 'AdminController', ['except' => ['destroy','show','update','create','edit','store']]);
    Route::prefix('admin')->group(function () {
        Route::get('/', ['as' => 'admin.index','uses' => 'AdminController@index']);
    });
    Route::resource('personnel', 'PersonnelController');
    Route::prefix('personnel')->group(function () {
        Route::get('/{personnel}/edit', ['as' => 'personnel.edit', 'uses' => 'PersonnelController@edit']);
        Route::put('/{personnel}', ['as' => 'personnel.update', 'uses' => 'PersonnelController@update']);
    });
    Route::resource('student', 'StudentController');
    Route::prefix('student')->group(function () {
        Route::get('/{student}/edit', ['as' => 'student.edit', 'uses' => 'StudentController@edit']);
        Route::put('/{student}', ['as' => 'student.update', 'uses' => 'StudentController@update']);
    });
    Route::resource('section', 'SectionController');
    Route::prefix('section')->group(function () {
        Route::get('/{section}/edit', ['as' => 'section.edit', 'uses' => 'SectionController@edit']);
        Route::put('/{section}', ['as' => 'section.update', 'uses' => 'SectionController@update']);
    });
});

/*END ADMIN PANEL*/

/*TEACHER PANEL*/
Route::middleware(['teacher_type'])->group(function () {
    Route::resource('teacher', 'TeacherController');
    Route::prefix('teacher')->group(function () {
        Route::get('/', ['as' => 'teacher.index','uses' => 'TeacherController@index']);
    });
});
/*END TEACHER PANEL*/

/*COUNSELOR PANEL*/
Route::middleware(['counselor_type'])->group(function () {
    Route::resource('counselor', 'CounselorController');
    Route::prefix('counselor')->group(function () {
        Route::get('/',['as' => 'counselor.index','uses' => 'CounselorController@index']);
    });
});
/*END COUNSELOR PANEL*/

/*HEALTH CARE PROFESSIONAL PANEL*/
Route::middleware(['healthcare_type'])->group(function () {
    Route::resource('healthcareprofessional', 'HealthCareController');
    Route::prefix('healthcareprofessional')->group(function () {
        Route::get('/',['as' => 'healthcareprofessional.index','uses' => 'HealthCareController@index']);
    });
});
/*END HEALTH CARE PROFESSIONAL PANEL*/

/*LIBRARIAN PANEL*/
Route::middleware(['librarian_type'])->group(function () {
    Route::resource('librarian', 'LibrarianController');
    Route::prefix('librarian')->group(function () {
        Route::get('/',['as' => 'librarian.index','uses' => 'LibrarianController@index']);
    });
});
/*END LIBRARIAN PANEL*/

/*PRINCIPAL PANEL*/
Route::middleware(['principal_type'])->group(function () {
    Route::resource('principal', 'PrincipalController');
    Route::prefix('principal')->group(function () {
        Route::get('/',['as' => 'principal.index','uses' => 'PrincipalController@index']);
    });
});
/*END PRINCIPAL PANEL*/
