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


//closure 
Route::get('/profil', function () {
 	return "tes gan";
 })->name('profile');

 //route name
 Route::get('tesrn', function () {
     return route('profile');
 });

 //parameter
 Route::get('/tesrn/{id}', function($id){
     return $id;
 });

 //controller
 Route::get('/tescontroller', '\App\Http\Controllers\TesCTRL@show');

 //resources
 Route::resource('siswa', '\App\Http\Controllers\siswacontroller');
