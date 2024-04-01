<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
})->name('/');

// Login & Register

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/go', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register/go', [RegisterController::class, 'register']);

Route::get('/admin/home', function () {
    $price = SaleController::sumSale();
    $cost = PurchaseController::sumPurchase();
    return view('home', [
        'price' => $price,
        'cost' => $cost
    ]);
})->middleware('auth');

Route::get('/admin', function () {
    return redirect('/admin/home');
})->middleware('auth');

// Purchase

Route::get('/admin/purchase', function () {
    $cost = PurchaseController::sumPurchase();
    return view('purchase',[
        'cost' => $cost
    ]);
})->middleware('auth');

Route::get('/admin/purchase/edit/{id}',function($id){
    $data = PurchaseController::selectPurchaseById($id);
    return view('purchase',[
        'mode' => 'edit',
        'data' => $data,
    ]);
})->middleware('auth');

Route::get('/admin/purchase/show', function () {
    $data = PurchaseController::selectPurchase();
    return view('purchase',[
        'mode' => 'show',
        'data' => $data,
    ]);
})->middleware('auth');

Route::get('/admin/purchase/insert', function () {
    return view('purchase',[
        'mode' => 'insert',
    ]);
})->middleware('auth');

Route::get('/admin/purchase/delete/{id}', function ($id) {
    $data = PurchaseController::deletePurchase($id);
    return view('purchase',[
        'mode' => 'show',
        'data' => $data,
        'success' => 'The log has been deleted. (Permanently)',
    ]);
})->middleware('auth');

Route::post('/admin/purchase/insert/go', [PurchaseController::class, 'insertPurchase'])->middleware('auth');

Route::post('/admin/purchase/edit/go', [PurchaseController::class, 'editPurchase'])->middleware('auth');

// Sale

Route::get('/admin/sale', function () {
    $price = SaleController::sumSale();
    return view('sale', [
        'price' => $price
    ]);
})->middleware('auth');

Route::get('/admin/sale/edit/{id}',function($id){
    $data = SaleController::selectSaleById($id);
    return view('sale',[
        'mode' => 'edit',
        'data' => $data,
    ]);
})->middleware('auth');

Route::get('/admin/sale/show', function () {
    $data = SaleController::selectSale();
    return view('sale',[
        'mode' => 'show',
        'data' => $data,
    ]);
})->middleware('auth');

Route::get('/admin/sale/insert', function () {
    return view('sale',[
        'mode' => 'insert',
    ]);
})->middleware('auth');

Route::get('/admin/sale/delete/{id}', function ($id) {
    $data = SaleController::deleteSale($id);
    return view('sale',[
        'mode' => 'show',
        'data' => $data,
        'success' => 'The log has been deleted. (Permanently)',
    ]);
})->middleware('auth');

Route::post('/admin/sale/insert/go', [SaleController::class, 'insertSale'])->middleware('auth');

Route::post('/admin/sale/edit/go', [SaleController::class, 'editSale'])->middleware('auth');
