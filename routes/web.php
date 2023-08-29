<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;


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

Route::get('/', function () {
    return view('home');
});
Route::view('home','home');
Route::view('contact','contact')->middleware('test');
Route::view('about','about')->middleware('test');

// Route::get('g2', function () {
//   $g2=['Ranita','selva','Dhanaprakash','Venkat','Vikram','Vasanth','Hari'];
//         return view('g2', ['cg' => $g2]);
// });

// Route::get('cgvak','App\Http\Controllers\EmpController@details'); 
//or
Route::get('cgvak',[EmpController::class,'details']);
Route::get('employee',[EmpController::class,'emp']);
Route::get('empdetails',[EmpController::class,'empd']);

//form
Route::view('form','form');
Route::view('show','show');
Route::view('create','create');
Route::view('form1','form1');
Route::post('Emp',[EmpController::class,'store']);
Route::view('index','index');
 Route::get('index',[EmpController::class,'empindex']);

 Route::get('/Emp/{emp}',[EmpController::class,'show']);
 Route::get('/Emp/{emp}/edit',[EmpController::class,'edit']);
 Route::patch('/Emp/{emp}',[EmpController::class, 'update']);
 Route::delete('/Emp/{emp}',[EmpController::class,'destroy']);
 Route::get('Emp',[EmpController::class,'create']);

// Route::get('Emp','App\Http\Controllers\EmpController@details'); 

//blade syntax
Route::view('syntax','syntax');

Route::get('form', 'App\Http\Controllers\EmpController@showEmployeeForm');

Auth::routes();
// Route::resource('Emp',EmpController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

