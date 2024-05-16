<?php

namespace App\Http\Controllers;
use App\Models\stock_products;
use Illuminate\Http\Request;

class StockproductsController extends Controller
{
    public function create()
    {
        $products = new Stock_products();
        $products->name = 'Mouse';
        $products->description = 'Bom mouse';
        $products->price = '522';
        $products->amount = '3';


        $products->save();
    }

    //
}
