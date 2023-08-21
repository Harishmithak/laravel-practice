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

Route::get('/', function () {
    return view('welcome');
});
Route::view('home','home');

Route::get('g2', function () {
  $g2=['Ranita','selva','Dhanaprakash','Venkat','Vikram','Vasanth','Hari'];
        return view('g2', ['cg' => $g2]);
});

Route::get('cgvak','App\Http\Controllers\EmpController@details');