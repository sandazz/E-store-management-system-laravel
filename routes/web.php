<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;



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



Route::get('/', [UserDetailsController::class, 'login'])->name('login');
Route::get('/register', [UserDetailsController::class, 'register'])->name('register');
Route::post('/loginCheck', [UserDetailsController::class, 'loginCheck'])->name('loginCheck');

Route::get('/user/admin', [UserDetailsController::class, 'admin'])->name('user.admin');
Route::get('/user/employee', [UserDetailsController::class, 'employee'])->name('user.employee');
Route::get('/user/customer', [UserDetailsController::class, 'customer'])->name('user.customer');

Route::get('/user/admin/employeeView', [UserDetailsController::class, 'showEmployee'])->name('user.showEmployee');
Route::get('/user/logout', [UserDetailsController::class, 'logout'])->name('user.logout');


Route::resource('/user', UserDetailsController::class)->names([
    'create'=> 'user.create',
    'store'=> 'user.store',
    'show'=> 'user.show',
    'edit'=> 'user.edit',
    'update'=> 'user.update',
    'destroy'=> 'user.destroy',
]);



Route::get('/user/admin/productView', [ProductsController::class, 'adminProduceView'])->name('user.admin.productView');
Route::get('/user/customer/productView', [ProductsController::class, 'customerProduceView'])->name('user.customer.productView');
Route::post('/user/customer/productOrder', [ProductsController::class, 'customerProductOrder'])->name('user.customer.productOrder');



Route::resource('/user/admin/product', ProductsController::class)->names([
    'create'=> 'product.create',
    'store'=> 'product.store',
    'show'=> 'product.show',
    'edit'=> 'product.edit',
    'update'=> 'product.update',
    'destroy'=> 'product.destroy',
]);


Route::get('/user/employee/orderView', [OrdersController::class, 'employeeOrderView'])->name('user.employee.orderView');
Route::resource('/user/order', OrdersController::class)->names([
    'create'=> 'order.create',
    'store'=> 'order.store',
    'show'=> 'order.show',
    'edit'=> 'order.edit',
    'update'=> 'order.update',
    'destroy'=> 'order.destroy',
]);





