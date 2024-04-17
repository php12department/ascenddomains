<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;


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
    return view('welcome');
})->name('index');

Route::get('login-form', [AdminController::class, 'login_form'])->name('login.form')->middleware('redirect.admin.auth');
Route::post('login-functionality', [AdminController::class, 'login_functionality'])->name('login.functionality');
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('adminlogout');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/domains', [DomainController::class, 'index'])->name('admin.domains');

    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
