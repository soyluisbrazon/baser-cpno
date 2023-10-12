<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Admin controllers
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AuthController;

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

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::group(['prefix' => '/'], function () {
  Auth::routes();

  Route::middleware(['auth'])->group(function () {
    //  Dashboard
      Route::get('/dashboard', [DashboardController::class, 'index']);

    // Logout
      Route::get('/logout', [AuthController::class, 'logout'])->name('logout.perform');
  });

});
