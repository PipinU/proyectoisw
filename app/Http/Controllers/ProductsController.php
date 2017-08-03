<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class ProductsController extends Controller
{
    public function index(){
        $products=Product::paginate(5);
        return view('admin.product.index')->with('products',$products);
    }
    
    public function create(){
        return view('admin.product.create');
    }
    
    public function store(Request $req){
        $product=new Product();
        $product->fill($req->all());
        
        $product->save();
        flash('El Producto ha sido creado correctamente!')->success();
        $products=Product::paginate(5);
        return view('admin.product.index')->with('products',$products);
    }
 public function edit($id){


         $product=Product::find($id);
        return view('admin.product.edit')->with('product',$product);
    }

    public function update(Request $request, $id){

        $product=Product::find($id);
        $product->fill($request->all());
        $product->save();
        return redirect()->route('admin.product.index');

    }
      public function show($id){
         
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.index');

    }
    public function destroy($id){
         $product=Product::find($id);
        flash('El Producto '.$product->name.' ha sido eliminado correctamente.')->error();  
        $product->delete(); 
        $products=Product::paginate(5);
        return view('admin.product.destroy')->with('product',$product);
       
    }
}
