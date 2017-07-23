<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ingredient;

class IngredientsController extends Controller
{
    public function index(){
        $ingredients=Ingredient::paginate(5);
        return view('admin.ingredient.index')->with('ingredients',$ingredients);
    }
    
    public function create(){
        return view('admin.ingredient.create');
    }
    
    public function store(Request $req){
        $ingredient=new Ingredient();
        $ingredient->fill($req->all());
        $ingredient->user_id=3;
        $ingredient->save();
        flash('El ingrediente ha sido creado correctamente!')->success();
        $ingredients=Ingredient::paginate(5);
        return view('admin.ingredient.index')->with('ingredients',$ingredients);
    }
    public function edit($id){
        $ingredient=Ingredient::find($id);
        return view('admin.ingredient.edit')->with('ingredients',$ingredient);
    }
    
    public function show(Request $request, $id){
        
    }
    
    public function destroy($id){
       $ingredient=Ingredient::find($id);
        $ingredient->fill($request->all());
        $ingredient->delete();
        flash('El ingrediente ' .$ingredient->name. 'ha sido eliminado correctamente!')->warning();
        $ingredients=Ingredient::paginate(5);
        return view('admin.ingredient.index')->with('ingredients',$ingredients);
    }
}
