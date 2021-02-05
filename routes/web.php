<?php

use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('user');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
    Route::get('/super', [SuperadminController::class, 'index'])->name('super')->middleware('super');
});



