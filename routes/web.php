<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth','prefix' => 'admin'],function(){
    Route::get('/addUser',[HomeController::class, 'addUser']);
    Route::post('/saveUser',[HomeController::class, 'saveUser']);

    Route::get('/allUser',[HomeController::class, 'allUser']);
    Route::get('/allMessage',[MessageController::class, 'index']);

    Route::get('/sendMessage',[HomeController::class, 'sendMessage']);
    Route::post('/saveMessage',[HomeController::class, 'saveMessage']);
});







