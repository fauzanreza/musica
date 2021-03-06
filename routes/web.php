<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\RadioController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LandingController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/login', [LandingController::class, 'login']);
Route::post('/signup', [LandingController::class, 'signup']);
Route::get('/podcast', [PodcastController::class, 'index'])->name('podcast');
Route::get('/radio', [RadioController::class, 'index'])->name('radio');

