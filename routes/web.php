<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use GuzzleHttp\Middleware;
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
    return view('auth.login');
})->name('auth.login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.karyawan')->middleware('auth:karyawan');

Route::group(['prefix' => 'karyawan'], function(){
    Route::post('login', [AuthController::class, 'karyawanLogin'])->name('karyawan.login');
    Route::get('logout', [AuthController::class, 'karyawanLogout'])->name('karyawan.logout');
});
