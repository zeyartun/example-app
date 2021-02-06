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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/addUser',[App\Http\Controllers\HomeController::class, 'addUser']);
Route::post('/admin/addUser',[App\Http\Controllers\HomeController::class, 'saveUser']);

Route::get('/admin/allUser',[App\Http\Controllers\HomeController::class, 'allUser']);
Route::get('/admin/allMessage',[App\Http\Controllers\HomeController::class, 'allMessage']);

Route::get('/admin/sendMessage',[App\Http\Controllers\HomeController::class, 'sendMessage']);




