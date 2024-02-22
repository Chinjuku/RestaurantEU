<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
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

// Route::get('/login', [AuthController::class, 'loginForm']);
// Route::get('/register', [AuthenController::class, 'registerForm'])->name('register.create');
// Route::post('/register', [AuthenController::class, 'register']);

Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('guest');
// Managers
Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home')->middleware('is_manager');
Route::get('/manager/managemenu', [ManagerController::class, 'managemenuPage'])->name('manager.menu')->middleware('is_manager');


Route::get('/chef/home', [HomeController::class, 'chefHome'])->name('chef.home')->middleware('is_chef');
Route::get('/cashier/home', [HomeController::class, 'cashierHome'])->name('cashier.home')->middleware('is_cashier');
Route::get('/waiter/home', [HomeController::class, 'waiterHome'])->name('waiter.home')->middleware('is_waiter');
// Route::get('/', [HomeController::class, 'welcome']);

