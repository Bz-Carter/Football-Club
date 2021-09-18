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

Auth:: routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('postedejoueur', App\Http\Controllers\WorkController::class);
    Route::resource('joueurs', App\Http\Controllers\FootballplayerController::class);
    Route::resource('jobdemembre', App\Http\Controllers\StaffjobController::class);
    Route::resource('membres', App\Http\Controllers\StaffmemberController::class);
    Route::resource('staffs', App\Http\Controllers\StaffController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
});
