<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardFormController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/frontend', function () {
    return view('awal');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/tambah', function () {
    return view('tambahadmin');
})->middleware('auth');

Route::get('/', [App\Http\Controllers\SessionController::class, 'index'])->name('login')->middleware('cekLogin');
Route::post('/auth/login', [App\Http\Controllers\SessionController::class, 'login']);
Route::get('/auth/logout', [App\Http\Controllers\SessionController::class, 'logout']);
Route::get('/form', [\App\Http\Controllers\formController::class, 'index'])->name('form');
Route::get('/dash', [DashboardFormController::class, 'index'])->middleware('auth');
Route::post('/form', [formController::class, 'store']);
