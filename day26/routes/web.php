<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('product');
})->name('home');

Route::get('/{mode}', function($mode){
    if($mode == 'show'){
        return view('product',[
            'mode'=>'show',
            'data'=>ProductController::selectProduct()
        ]);
    }
    else{
        return view('product',[
            'mode'=>$mode
        ]);
    }
});

Route::get('/show', function () {
    $data = ProductController::selectProduct();
    return view('show', [
        'data' => $data,
    ]);
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/edit/{id}', function ($id) {
    $data = ProductController::selectProductById($id);
    return view('product',[
        'mode'=>'edit',
        'id'=>$id,
        'data'=>$data
    ]);
});

Route::post('/add/go',[ProductController::class, 'insertProduct']);

Route::post('/edit/go',[ProductController::class, 'editProduct']);

Route::get('/delete/{id}', function ($id) {
    ProductController::deleteProduct($id);
    $data = ProductController::selectProduct();
    return view('product',[
        'mode'=>'show',
        'success'=>'Product deleted permanently!',
        'data'=>$data
    ]);
});

// Route::get('/test', function () {
//     return view('test');
// });
