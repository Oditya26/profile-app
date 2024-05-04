<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('form');
});

Route::get('profile/{username}',[MainController::class, 'ProfilePage']);

Route::get('/home', [MainController::class, 'HomePage']);

Route::group(['middleware'=>'auth','prefix'=>'settings'],function() {
    Route::get('/profile', function() {
        echo 'opened profile setting';
    });

    Route::get('/language', function() {
        echo 'opened language setting';
    });

    Route::get('/integration', function() {
        echo 'opened integration setting';
    });
});

Route::get('/login', function() {
    return view('login');
})->name ('login');

Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/registration', [LoginController::class, 'registration']);

Route::get('/logout', [LoginController::class, 'logout']);