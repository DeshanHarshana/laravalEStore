<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Employee;

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


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/admin_details', [AdminController::class, 'showadmindetails'])->name('showadmindetails');
Route::get('/product_details', [AdminController::class, 'showproductdetails'])->name('showproductdetails');
Route::get('/product_detailsshow', [ProductController::class, 'show2'])->name('showproductdetails2');
Route::get('/showOneProduct/{product}', [ProductController::class, 'showoneproduct'])->name('showoneproduct');

Route::get('/employee_details', [AdminController::class, 'showemployeedetails'])->name('showemployeedetails');
Route::get('/newProduct', [AdminController::class, 'addnewproduct'])->name('addnewproduct');
Route::get('/newEmployee', [EmployeeController::class, 'addnewemployee'])->name('addnewemployee');
Route::get('/customerDetails', [CustomerController::class, 'showCustomerName'])->name('showCustomerName');
Route::get('/employeeDetails', [EmployeeController::class, 'showEmployeeName'])->name('showEmployeeName');
Route::get('/orderDetails', [OrderController::class, 'showAll'])->name('showOrder');

Route::get('/success', [LoginController::class, 'successLogin']);

Route::post('/checklogin', [LoginController::class, 'checkLogin']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', [LoginController::class, 'admin']);
Route::get('/employee', [LoginController::class, 'employee']);
Route::get('/customer', [LoginController::class, 'customer']);
Route::get('/customer', [LoginController::class, 'customer']);
Route::get('/registor', [LoginController::class, 'registor']);

Route::get('/error', [LoginController::class, 'error']);
Route::post('/store', [CustomerController::class, 'store'])->name('store');
Route::post('/storeproduct', [ProductController::class, 'store'])->name('storeproduct');
Route::post('/storeemployee', [EmployeeController::class, 'store'])->name('storeemployee');

Route::put('/updateproduct/{id}', [ProductController::class, 'update'])->name('updateproduct');
Route::get('/editproduct/{id}', [ProductController::class, 'edit'])->name('editproduct');
Route::resource('products', ProductController::class);
Route::resource('employees', EmployeeController::class);

Route::resource('order', OrderController::class);
