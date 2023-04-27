<?php

use App\Http\Controllers\AuthController;
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
// to view login page
Route::get('/', [AuthController::class,'index'])->name('authentication');

// for loggingin the user with correct username and password
// eg. email: larainfo@gmail.com and password: 123456
Route::post('login',[AuthController::class,'login'])->name('login');


Route::group(['middleware' => 'auth'], function () {

Route::get('/admin', [AuthController::class, 'show'])->name('admin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


