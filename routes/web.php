<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailsController;

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

Route::resource('/user', UserDetailsController::class)->names([
    'create'=> 'user.create',
    'store'=> 'user.store',
    'show'=> 'user.show',
    'edit'=> 'user.edit',
    'update'=> 'user.update',
    'destroy'=> 'user.destroy',
]);








