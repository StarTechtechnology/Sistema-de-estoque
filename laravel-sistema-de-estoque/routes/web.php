<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\productCategoryController;
use App\Http\Controllers\StockmovimentController;
use App\Http\Controllers\StockaccountingsController;
use App\Http\Controllers\StockproductsController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ControleEstoque');
});

Route::get('/list', [FrontController::class, 'list'])->name('category.list');

            Route::get('/supplier/create', [SupplierController::class, 'create']);

            Route::get('/stockproducts/create', [StockproductsController::class, 'create'])->name('stockproducts.create');

            Route::get('/stockaccounting/create', [StockaccountingsController::class, 'create']);

            Route::get('/stockmoviment/create', [StockmovimentController::class, 'create']);

            Route::get('/userm/create', [userController::class, 'create']);

            Route::get('/formulario/create', [productCategoryController::class, 'create'])->name('formulario.create');
            Route::post('/formulario/create', [productCategoryController::class, 'store']);

            Route::get('/formulario/update/{id}', [productCategoryController::class, 'update'])->name('formulario.update');
            Route::post('/formulario/update/{id}', [productCategoryController::class, 'edit']);

            Route::get('/formulario/delete/{id}', [productCategoryController::class, 'delete'])->name('formulario.delete');


        Route::get('/ControleEstoque', function(){
            return view('ControleEstoque');
            });

