<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function create()
    {
        $supplie = new Supplier();
        $supplie->name = 'Felipe';
        $supplie->address = 'Centro';
        $supplie->telephone = '12988989047';
        $supplie->email = 'alunosenai@senai.com.br';




        $supplie->save();
    }
    //
}
