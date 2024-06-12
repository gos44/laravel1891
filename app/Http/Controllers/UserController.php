<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function formulariouser(){

        // return 'hola';
         return view('usuarios.product');
     
     }
     
     public function userStore(Request $request){
     
       $producto = new User();
       $producto->name=$request->name;
       $producto->tfno=$request->tfno;
       $producto->codigo=$request->codigo;
       $producto->direcion=$request->direcion;
       $producto->save();
       return $producto;       
     }
     
     public function listaruser(){
            
       $producto = User::orderBy("id","desc")->get();
       return view("usuarios.listarproducts",compact("producto"));
     }
         public function show(User $productos){
           return view('usuarios.showproducts', compact('productos'));
       }
       public function destroyuser(User $producto){
         $producto->delete();
          return redirect()->route("listar.user");
          
      }
           public function edit(User $producto){
             return view('usuarios.edit_product',compact('producto'));
           }
     
           public function update(Request $request,User $producto ){    
             $producto->name = $request->name;
             $producto->price = $request->price;
             $producto->description = $request->description;
             $producto->cant = $request->cant;   
             $producto->save();
             return redirect()->route('listarproducts');
     
    }
     
}
     
     
