<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

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


Route::get('/',[Homecontroller::class,"index"]);
Route::get('/users',[Admincontroller::class,"user"]);
Route::get('/viewreservations',[Admincontroller::class,"viewreservations"]);
Route::get('/foodmenu',[Admincontroller::class,"food"]);
Route::get('/chef',[Admincontroller::class,"chef"]);
Route::post('/uploadfood',[Admincontroller::class,"upload"]);
Route::post('/uploadchef',[Admincontroller::class,"uploadchef"]);
Route::post('/reservation',[Admincontroller::class,"reservation"]);
Route::get("/deleteuser/{id}",[Admincontroller::class,"deleteusers"]);
Route::get("/deletemenu/{id}",[Admincontroller::class,"deletemenu"]);
Route::get('/redirects',[Homecontroller::class,"redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
