<?php

use App\Http\Controllers\products;
use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//user
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[user::class,'login']);

Route::post('/login',[user::class,'functionlogin'])->name('functionlogin');

Route::get('/register',[user::class,'register']);

Route::post('/register',[user::class,'registerfunction'])->name('registerfunction');


//home
Route::get('/home',[products::class,'home']);

Route::get('/add/{id}',[products::class,'add'])->name('add');
