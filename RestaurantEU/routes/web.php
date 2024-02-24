<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\WaiterController;
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
// Dashboard Routes
Route::get('/manager/dashboard', [HomeController::class, 'managerHome'])->name('manager.home')->middleware('is_manager');
// Manage Employee Routes
// Route::get('/manager/manageemployee', [HomeController::class, 'manager'])->name('manager.home')->middleware('is_manager');
Route::post('/manager/addemployee', [ManagerController::class,'addEmployee'])->name('manager.addem')->middleware('is_manager');
Route::post('/manager/updateemployee/{id}', [ManagerController::class, 'updateEmployee'])->name('manager.updateem')->middleware('is_manager');
Route::get('/manager/deleteemployee/{id}', [ManagerController::class, 'deleteEmployee'])->name('manager.deleteem')->middleware('is_manager');
// Manage Menu Routes
Route::get('/manager/managemenu', [ManagerController::class, 'showmenu'])->name('manager.menu')->middleware('is_manager');
Route::post('/manager/addmenu', [ManagerController::class, 'addmenu'])->name('manager.addmenu')->middleware('is_manager');
Route::post('/manager/updatemenu/{id}', [ManagerController::class, 'updatemenu'])->name('manager.updatemenu')->middleware('is_manager');
Route::get('/manager/deletemenu/{id}', [ManagerController::class, 'deletemenu'])->name('manager.deletemenu')->middleware('is_manager');

// Chef
Route::get('/chef/home', [HomeController::class, 'chefHome'])->name('chef.home')->middleware('is_chef');

// Cashier
Route::get('/cashier/home', [HomeController::class, 'cashierHome'])->name('cashier.home')->middleware('is_cashier');

// Waiter
Route::get('/waiter/home', [HomeController::class, 'waiterHome'])->name('waiter.home')->middleware('is_waiter');

// Customer
// Reservation
Route::get('/customer/reservation', [CustomerController::class, 'reservation'])->name('customer.home');
Route::post('/customer/reserving', [CustomerController::class, 'reserving'])->name('cus.reserve');
// Order menu
Route::get('customer/{id}', [CustomerController::class, 'tablepage'])->name('customer.table');
// Route::get('customer/{id}/order/{id}', [CustomerController::class, 'order']);
// Route::get('/', [HomeController::class, 'welcome']);

