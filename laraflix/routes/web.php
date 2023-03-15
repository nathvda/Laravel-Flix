<?php

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;

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

Route::get('/', fn () => view('welcome'))->middleware('guest');

Route::get('/home', function () {
    return view('homepage', ['user' => User::find(auth()->user()->id)]);
})->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/register', [UserController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest');

Route::post('/login', [SessionController::class, 'store'])->middleware('guest');

Route::get('/profile/new', [ProfileController::class, 'create'])->middleware('auth');

Route::post('/profile/new', [ProfileController::class, 'store'])->middleware('auth');

Route::get('/browse/{profile}', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/see/{movie}', [VideoController::class, 'show'])->middleware('auth');

Route::get('/watch/{movie}', [VideoController::class, 'watch'])->middleware('auth');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth');
