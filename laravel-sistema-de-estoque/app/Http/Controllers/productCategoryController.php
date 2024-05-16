<?php

namespace App\Http\Controllers;

use App\Models\productCategory;
use Illuminate\Http\Request;

class productCategoryController extends Controller
{
    public function create()
    {
        $category = new productCategory();
        $category->name = 'Descolanrante';
        $category->description = 'Legal';
        $category->amount = '1';
        $category->weight = '2.3';
        $category->size = '12';



        $category->save();
    }
}
