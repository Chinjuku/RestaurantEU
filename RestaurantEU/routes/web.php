<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/register', [AuthenController::class, 'registerForm'])->name('register.create');
// Route::post('/register', [AuthenController::class, 'register']);

Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('guest');
// Managers

Route::group(['middleware' => 'is_manager'], function() {
    // Dashboard Routes
    Route::get('/manager/dashboard', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/manager/dashboard/totalpricechart', [DashboardController::class, 'dashboardTotalPriceChart']);
    Route::get('/manager/dashboard/time', [DashboardController::class, 'dashboardTime']);
    // Manage Employee Routes
    Route::get('/manager/manageemployee', [ManagerController::class, 'manageemployee'])->name('manager.employee');
    Route::post('/manager/addemployee', [ManagerController::class,'addEmployee'])->name('manager.addem');
    Route::post('/manager/updateemployee/{id}', [ManagerController::class, 'updateEmployee'])->name('manager.updateem');
    Route::get('/manager/deleteemployee/{id}', [ManagerController::class, 'deleteEmployee'])->name('manager.deleteem');
    // Manage Menu Routes
    Route::get('/manager/managemenu', [ManagerController::class, 'showmenu'])->name('manager.menu');
    Route::post('/manager/addmenu', [ManagerController::class, 'addmenu'])->name('manager.addmenu');
    Route::post('/manager/updatemenu/{id}', [ManagerController::class, 'updatemenu'])->name('manager.updatemenu');
    Route::get('/manager/deletemenu/{id}', [ManagerController::class, 'deletemenu'])->name('manager.deletemenu');
});
// Chef
Route::group(['middleware' => 'is_chef'], function() {
    Route::get('/chef/neworder', [HomeController::class, 'chefHome'])->name('chef.neworder');
    // Route::get('/chef/ordershow/{id}', [ChefController::class, 'orderShow'])->name('chef.neworder.show');
    Route::get('/chef/orderdone/{id}', [ChefController::class, 'clickDone'])->name('chef.cookingdone');
    Route::get('/chef/orderdone', [ChefController::class, 'orderdone'])->name('chef.orderdone');
});
// Waiter
Route::group(['middleware' => 'is_waiter'], function() {
    Route::get('/waiter/readytoserve', [HomeController::class, 'waiterHome'])->name('waiter.readytoserve');
    Route::get('/waiter/servedone', [WaiterController::class, 'servedone'])->name('waiter.servedone');
    Route::get('/waiter/serve/{id}', [WaiterController::class , 'updateserved' ])->name('waiter.served');
});
// Cashier
Route::get('/cashier/home', [HomeController::class, 'cashierHome'])->name('cashier.home')->middleware('is_cashier');

// Customer
// Reservation
Route::get('/customer/reservation/home', [CustomerController::class, 'reservationHome'])->name('reservation.home');
Route::get('/customer/reservation/form', [CustomerController::class, 'reservationForm'])->name('reservation.form');
Route::get('/customer/reservation/done/{time}', [CustomerController::class, 'reservationDone'])->name('reservation.done');
Route::post('/customer/reserving', [CustomerController::class, 'reserving'])->name('cus.reserve');


// Order menu
Route::get('customer/table/{id}', [CustomerController::class, 'tablepage'])->name('customer.table');
Route::post('customer/table/{id}/choose', [CustomerController::class, 'chooseMenu'])->name('customer.table.choose');
Route::get('customer/table/{id}/order', [CustomerController::class, 'customerOrder'])->name('customer.table.order');
Route::get('customer/table/{id}/orderlist/{orderid}', [CustomerController::class, 'orderPage'])->name('customer.orderlist');
Route::get('customer/table/{id}/clearcart/{key}', [CustomerController::class, 'clearCookie'])->name('customer.table.clearcart');
Route::get('customer/table/{id}/cart', [CustomerController::class, 'showCart'])->name('customer.table.cart');
Route::fallback( function() { return view('404'); });

Route::get('showreserve', [HomeController::class, 'showReserve'])->name('showreserve');
// Route::group(['middleware' => ['is_cashier', 'is_waiter']], function() {
//     Route::get('showreserve', [HomeController::class, 'showReserve'])->name('showreserve');
// });
