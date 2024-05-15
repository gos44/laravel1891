<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
  public function formularioProducto(){

   // return 'hola';
    return view('Productos.product');

}

public function productoStore(Request $request){

  $producto = new Products();
  $producto->name=$request->name;
  $producto->price=$request->price;
  $producto->description=$request->description;
  $producto->cant=$request->cant;
  $producto->date=$request->date;
  $producto->save();
  return $producto;

}

public function listarproduc(){
       
  $producto = Products::orderBy("id","desc")->get();
  return view("Productos.listarproducts",compact("producto"));
}

 
    public function show(Products $producto){
     
     // $producto = Products::find($id);
     // return $producto;
      return view('Productos.showproducts', compact('producto'));

  }
  public function destroy(Products $producto){
    // $producto = Products::find($id);
    // return $producto;
    $producto->delete();
     return redirect()->route("listarproducts");
     
 }

  

      public function edit(Products $producto){

        return view('Productos.edit_product',compact('producto'));


      }

      public function update(Request $request,Products $producto ){

        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->description = $request->description;
        $producto->cant = $request->cant;   
        $producto->save();
        return redirect()->route('listarproducts');

    }

     
}

