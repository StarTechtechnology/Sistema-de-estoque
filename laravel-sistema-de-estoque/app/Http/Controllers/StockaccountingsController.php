<?php

namespace App\Http\Controllers;

use App\Models\Stock_accountings;
use Illuminate\Http\Request;

class StockaccountingsController extends Controller
{
    public function create()
    {
        $accounting = new Stock_accountings();
        $accounting->amount = '17';


        $accounting->save();
    }

}
