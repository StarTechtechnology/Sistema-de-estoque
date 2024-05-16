<?php

namespace App\Http\Controllers;

use App\Models\productCategory;
use Illuminate\Http\Request;

class productCategoryController extends Controller
{
    public function create(){
    return view ('formulario.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'max:255'],
        ]);
    
        $category = new productCategory();
        $category->name = $request->name;
        $category->description= $request->description;
        $category->amount = $request->amount;
        $category->weight = $request->weight;
        $category->size = $request->size;

        $category->save();

        return redirect()->route('formulario.create')->with('sucess', 'Produto salvo com sucesso');
    }
    public function update($id){
        $category = productCategory::find($id);

        return view('formulario.create', compact('productscategory'));
    }
    public function edit(Request $request, $id){
        $request->validate([
            'name' => ['required', 'max:255']
        ]);
        
        $category = productCategory::find($id);

        $category = new productCategory();
        $category->name = $request->name;
        $category->description= $request->description;
        $category->amount = $request->amount;
        $category->weight = $request->weight;
        $category->size = $request->size;

        $category->save();

        return redirect()->route('formulario.update', ['id' => '$id'])->with('sucess', 'Produto atualizado com sucesso');
    }

    public function delete($id){
        $category = productCategory::find($id);

        $category->delete();

        return view('formulario.create')->with('sucess', 'Produto deletado com sucesso');
    }
}