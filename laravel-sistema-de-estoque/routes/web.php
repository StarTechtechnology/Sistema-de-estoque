<?php

use App\Http\Controllers\productCategoryController;
use App\Http\Controllers\StockmovimentController;
use App\Http\Controllers\StockaccountingsController;
use App\Http\Controllers\StockproductsController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('estoque', function(){
    return view('estoque');
    });

    Route::get('/ContoleEstoquepag2', function(){
        return view('/ContoleEstoquepag2');
        });

        Route::get('/ContoleEstoque', function(){
            return view('/ControleEstoque');
            });

            Route::get('/supplier/create', [SupplierController::class, 'create']);

            Route::get('/stockproducts/create', [StockproductsController::class, 'create']);

            Route::get('/stockaccounting/create', [StockaccountingsController::class, 'create']);

            Route::get('/stockmoviment/create', [StockmovimentController::class, 'create']);

            Route::get('/userm/create', [userController::class, 'create']);

            Route::get('/productcategory/create', [productCategoryController::class, 'create']);