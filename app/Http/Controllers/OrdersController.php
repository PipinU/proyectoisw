<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Order;

class OrdersController extends Controller
{
    public function index(){
        $orders=Order::paginate(5);
        return view('cajero.order.index')->with('orders',$orders);
    }
    
    public function create(){
        return view('cajero.order.create');
    }
    
    public function store(Request $req){
        $order=new Order();
        $order->fill($req->all());
        
        $order->save();
        flash('El Pedido ha sido creado correctamente!')->success();
        $orders=Order::paginate(5);
        return view('cajero.order.index')->with('orders',$orders);
    }
 public function edit($id){


         $order=Order::find($id);
        return view('cajero.order.edit')->with('order',$order);
    }

    public function update(Request $request, $id){

        $order=Order::find($id);
        $order->fill($request->all());
        $order->save();
        return redirect()->route('cajero.order.index');

    }
      public function show($id){
         
        $order=Order::find($id);
        $order->delete();
        return redirect()->route('cajero.order.index');

    }
    public function destroy($id){
         $order=Order::find($id);
        flash('El Pedido '.$order->name.' ha sido eliminado correctamente.')->error();  
        $order->delete(); 
        $orders=Order::paginate(5);
        return view('cajero.order.destroy')->with('order',$order);
       
    }
}
