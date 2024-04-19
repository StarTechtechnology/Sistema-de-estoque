<?php

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