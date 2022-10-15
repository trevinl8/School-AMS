<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\MuserController;
use App\Http\Controllers\HomeController;

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

// MOE Dashboard Routes
Route::prefix('moe')->group(function () 
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/schools', SchoolController::class);
    Route::resource('/users', MuserController::class);
});

// School Dashboard Routes
Route::prefix('sch')->group(function () 
{
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'schoolindex'])->name('dashboard');
});