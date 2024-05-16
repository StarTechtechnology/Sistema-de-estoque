<?php

namespace App\Http\Controllers;

use App\Models\productCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function productList(){
        $category = productCategory::all();
    
        return view('ContoleEstoquepag2', compact('category'));
    }
   
}
