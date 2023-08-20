<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/dash', function () {
    return view('dashboardd');
});

Auth::routes();
Route::get('/auth', [App\Http\Controllers\SessionController::class, 'index']);
Route::post('/auth/login', [App\Http\Controllers\SessionController::class, 'login']);