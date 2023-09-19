<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardFormController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\tambahadmin;
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

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::get('/afterinput', function() {
    return view('formafterinput');
})->name('afterinput');

Route::get('/', [SessionController::class, 'index'])->name('login')->middleware('cekLogin');
Route::post('/auth/login', [SessionController::class, 'login']);
Route::get('/auth/logout', [SessionController::class, 'logout']);
Route::get('/form', [formController::class, 'index'])->name('form');
Route::get('/dash', [DashboardFormController::class, 'index',])->middleware('auth')->name('dash');
Route::get('/hapus/{id}', [DashboardFormController::class, 'hapus']);
Route::post('/form', [formController::class, 'store']);
Route::post('/tambahadmin', [tambahadmin::class, 'tambahAdmin']);
Route::get('/admin', [DashboardFormController::class, 'admin'])->name('admin');
Route::get('/hapusAdmin/{id}', [DashboardFormController::class, 'hapusAdmin']);