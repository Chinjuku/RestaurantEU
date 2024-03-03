<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\ChefController;
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
Route::get('/manager/manageemployee', [ManagerController::class, 'manageemployee'])->name('manager.employee')->middleware('is_manager');
Route::post('/manager/addemployee', [ManagerController::class,'addEmployee'])->name('manager.addem')->middleware('is_manager');
Route::post('/manager/updateemployee/{id}', [ManagerController::class, 'updateEmployee'])->name('manager.updateem')->middleware('is_manager');
Route::get('/manager/deleteemployee/{id}', [ManagerController::class, 'deleteEmployee'])->name('manager.deleteem')->middleware('is_manager');
// Manage Menu Routes
Route::get('/manager/managemenu', [ManagerController::class, 'showmenu'])->name('manager.menu')->middleware('is_manager');
Route::post('/manager/addmenu', [ManagerController::class, 'addmenu'])->name('manager.addmenu')->middleware('is_manager');
Route::post('/manager/updatemenu/{id}', [ManagerController::class, 'updatemenu'])->name('manager.updatemenu')->middleware('is_manager');
Route::get('/manager/deletemenu/{id}', [ManagerController::class, 'deletemenu'])->name('manager.deletemenu')->middleware('is_manager');

// Chef
Route::get('/chef/neworder', [HomeController::class, 'chefHome'])->name('chef.neworder')->middleware('is_chef');
Route::get('/chef/orderdone', [ChefController::class, 'orderdone'])->name('chef.orderdone')->middleware('is_chef');

// Waiter
Route::get('/waiter/readytoserve', [HomeController::class, 'waiterHome'])->name('waiter.readytoserve')->middleware('is_waiter');
Route::get('/waiter/servedone', [WaiterController::class, 'servedone'])->name('waiter.servedone')->middleware('is_waiter');
Route::post('/waiter/serve/{id}', [WaiterController::class , 'updateserved' ])->name('waiter.served')->middleware('is_waiter');

// Cashier
Route::get('/cashier/home', [HomeController::class, 'cashierHome'])->name('cashier.home')->middleware('is_cashier');

// Customer
// Reservation
Route::get('/customer/reservation/home', [CustomerController::class, 'reservationHome'])->name('reservation.home');
Route::get('/customer/reservation/form', [CustomerController::class, 'reservationForm'])->name('reservation.form');
Route::get('/customer/reservation/done', [CustomerController::class, 'reservationDone'])->name('reservation.done');
Route::post('/customer/reserving', [CustomerController::class, 'reserving'])->name('cus.reserve');

// Order menu

Route::get('customer/table/{id}', [CustomerController::class, 'tablepage'])->name('customer.table');
Route::post('customer/table/{id}/choose', [CustomerController::class, 'chooseMenu'])->name('customer.table.choose');
Route::get('customer/table/{id}/order', [CustomerController::class, 'customerOrder'])->name('customer.table.order');
Route::get('customer/table/{id}/cart', [CustomerController::class, 'showCart'])->name('customer.table.cart');
Route::fallback( function() { return view('404'); });
