<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {

    Route::get('dashboard', function() {
        return view('dashboard');
    });
    Route::get('about', function() {
        return view('about.index');
    });
    Route::get('gallery', function() {
        return view('gallery.index');
    });
    Route::get('member', function() {
        return view('member.index');
    });

    Route::resource('event',EventController::class);
    Route::resource('about',AboutController::class);
    // Route::get('event', [EventController::class, 'index'])->name('event');
    // Route::post('event', [EventController::class, 'create'])->name('store');

});
