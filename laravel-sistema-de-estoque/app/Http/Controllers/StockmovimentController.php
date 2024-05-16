<?php

namespace App\Http\Controllers;

use App\Models\Stock_moviment;
use Illuminate\Http\Request;

class StockmovimentController extends Controller
{
    public function create()
    {
        $moviment = new Stock_moviment();
        $moviment->amount = '15';

        $moviment-> save();

    }
}
