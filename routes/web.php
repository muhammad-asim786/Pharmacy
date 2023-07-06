<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pharmacyController;
use App\Http\Controllers\cartController;
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

Route::get('/', [pharmacyController::class,'index']);
Route::get('/cart', [cartController::class,'show']);
// Route::get('cart', [pharmacyController::class,'showcart']);

Route::post('/cart/{medicineID}', [pharmacyController::class,'cart']);


Route::get('/test', function () {
    return view('test');
});

Route::get('/cart', function () {
    return view('cart');
});
    
    



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
