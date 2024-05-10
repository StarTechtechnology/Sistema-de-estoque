<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/estoque', function(){
    return view('estoque');
    });

    Route::get('/ControleDois', function(){
        return view('ContoleEstoquepag2');
        });

        Route::get('/ControleEstoque', function(){
            return view('ControleEstoque');
            });