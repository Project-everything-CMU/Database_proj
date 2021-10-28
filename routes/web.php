<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OfficesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderDetailsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\PreOrderController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test' ,[AdminController::class,'test']) -> name('test');
Route::get('/admin' ,[AdminController::class,'index']) -> name('admin');

Route::get('/customer/all' ,[CustomerController::class,'customer']) -> name('customer');
Route::post('/customer/add' ,[CustomerController::class,'addCustomer']) -> name('addCustomer');
Route::get('/customer/edit/{id}' ,[CustomerController::class,'editCustomer']) -> name('editCustomer');
Route::post('/customer/update' ,[CustomerController::class,'updateCustomer']) -> name('updateCustomer');
Route::get('/customer/delete/{id}',[CustomerController::class,'deleteCustomer']) -> name('deleteCustomer');


Route::get('/employee/all' ,[EmployeeController::class,'employee']) -> name('employee');
Route::post('/employee/add' ,[EmployeeController::class,'addEmployee']) -> name('addEmployee');
Route::get('/employee/delete/{id}',[EmployeeController::class,'deleteEmployee']) -> name('deleteEmployee');
//Route::get('/employee/add' ,[AdminController::class,'addEmployee']) -> name('addEmployee');

Route::get('/product/all' ,[ProductController::class,'product']) -> name('product') ;
Route::post('/product/add' ,[ProductController::class,'addProduct']) -> name('addProduct') ;
Route::get('product/edit/{product_code}' ,[ProductController::class,'editProduct']) -> middleware('checkSale');
Route::post('/product/update/',[ProductController::class,'updateProduct']) ;
<<<<<<< HEAD
Route::get('/product/delete/{id}',[ProductController::class,'deleteProduct']) ;
=======
Route::get('/product/delete/{id}',[EmployeeController::class,'deleteProduct']) -> name('deleteProduct');
>>>>>>> 2364f5124aa481cf88e41be88e679bafc57bebc9

Route::get('user/edit/{id}' ,[AdminController::class,'editUser'])  -> middleware('checkManager');
Route::post('/user/update/',[AdminController::class,'updateUser']);
Route::post('/user/changerole/',[AdminController::class,'changeRole']) -> name('changeRole') -> middleware('checkManager');
Route::get('/user/delete/{id}',[AdminController::class,'deleteUser']) -> middleware('check');


Route::get('/address/all' ,[AddressController::class,'address']) -> name('address'); 
Route::post('/address/add' ,[AddressController::class,'addAddress']) -> name('addAddress');
Route::get('address/edit/{addr_ID}' ,[AddressController::class,'editAddress']);
Route::post('/address/update/',[AddressController::class,'updateAddress']);
Route::get('/address/delete/{id}',[AddressController::class,'addressProduct']) ;


Route::get('/offices/all' ,[OfficesController::class,'offices']) -> name('offices'); 
Route::post('/offices/add' ,[OfficesController::class,'addOffices']) -> name('addOffices');
Route::get('offices/edit/{office_code}' ,[OfficesController::class,'editOffices']);
Route::post('/offices/update/',[OfficesController::class,'updateOffices']);
Route::get('/offices/delete/{id}',[OfficesController::class,'deleteOffices']) ;

Route::get('/orderDetails/all' ,[OrderDetailsController::class,'orderDetails']) -> name('orderDetails'); 
Route::post('/orderDetails/add' ,[OrderDetailsController::class,'addOrderDetails']) -> name('addOrderDetails');
Route::get('orderDetails/edit/{order_number}' ,[OrderDetailsController::class,'editOrderDetails']);
Route::post('/orderDetails/update/',[OrderDetailsController::class,'updateOrderDetails']);
Route::get('/orderDetails/payment' , [OrderDetailsController::class,'updateOrderDetails']);
Route::get('/orderDetails/delete/{id}',[OrderDetailsController::class,'deleteOrderDetails']) ;


Route::get('/order/all' ,[OrdersController::class,'order']) -> name('order'); 
Route::post('/order/add' ,[OrdersController::class,'addOrder']) -> name('addOrder');
Route::get('order/edit/{order_number}' ,[OrdersController::class,'editOrder']);
Route::post('/order/update/',[OrdersController::class,'updateOrder']);
Route::get('/order/delete/{id}',[OrdersController::class,'deleteOrder']) ;
Route::get('order/orderdetail' ,[OrdersController::class,'order']);
Route::get('/order/delete/{id}',[OrdersController::class,'delete']) -> name('delete');


Route::get('/orderdetail/buy/{product_code}',[OrderDetailsController::class,'orderDetails']); 
Route::get('/orderdetail/buy' ,[OrderDetailsController::class,'editDetailsbyOrder']) ;
//Route::get('/orderdetail/buy/{id}',[OrderDetailsController::class,'addOrderdetail']);
Route::get('/showorderdetail' ,[OrderDetailsController::class,'index']) -> name('showorderdetail') ;


Route::get('payment/all' , [PaymentsController::class,'index']) -> name('payment');
Route::post('payment/add' , [PaymentsController::class,'addPayment']) -> name('addPayment');
Route::get('payment/edit/{id}' ,[PaymentsController::class,'editPayment']);
Route::post('/payment/update/',[PaymentsController::class,'updatePayment']);
Route::get('/payment/delete/{id}',[PaymentsController::class,'deletePayment']) ;

Route::get('Preorder/all' , [PreOrderController::class,'index']) -> name('Preorder');
Route::post('Preorder/add' , [PreOrderController::class,'addPreorder']) -> name('addPreorder');
Route::get('Preorder/edit/{id}' ,[PreOrderController::class,'editPreorder']);
Route::post('/Preorder/update/',[PreOrderController::class,'updatePreorder']);
Route::get('/Preorder/delete/{id}',[PreOrderController::class,'deletePreorder']) -> name('deletePreorder');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $user = User::all();
    // return view('dashboard' , compact('user'));
    $user = Auth::user() -> id ;
    return view('dashboard' , compact('user'));


})->name('dashboard');
