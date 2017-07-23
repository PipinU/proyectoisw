<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UsersController extends Controller
{
    public function index(){
        $users=User::paginate(5);
        return view('admin.user.index')->with('users',$users);
    }
    public function create(){
        return view('admin.user.create');
    }
    
    public function store(Request $req){
        $user=new User();
        $user->fill($req->all());
        $user->save();
        flash('El usuario ha sido creado correctamente!')->success();
        $users=User::paginate(5);
        return view('admin.user.index')->with('users',$users);
    }
    
   public function edit($id){


         $user=User::find($id);
        return view('admin.user.edit')->with('user',$user);
    }

    public function update(Request $request, $id){

        $user=User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->route('admin.user.index');

    }
      public function show($id){
         
        $user=User::find($id);
        $user->delete();
        return redirect()->route('admin.user.index');

    }
    public function destroy($id){
         $user=User::find($id);
        flash('El usuario '.$user->name.' ha sido eliminado correctamente.')->error();  
        $user->delete(); 
        $users=User::paginate(5);
        return view('admin.user.destroy')->with('user',$user);
       
    }
}
