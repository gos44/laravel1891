<?php
namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function formulariouser()
    {
        return view('books.product');
    }

    public function userStore(Request $request)
    {
        $producto = new book();
        $producto->title = $request->title;
        $producto->codigo = $request->codigo;
        $producto->isbn = $request->isbn;
        $producto->editorial = $request->editorial;
        $producto->paginas = $request->paginas;
        $producto->save();
        return $producto;
    }

    public function listaruser()
    {
        $productos = book::orderBy("id", "desc")->get();
        return view("books.listarproducts", compact("productos"));
    }

    public function show(book $libro)
    {
        return view('books.showproducts', compact('libro'));
    }

    public function destroyuser(book $libro)
    {
        $libro->delete();
        return redirect()->route("listar.libro");
    }

    public function edit(book $libro)
    {
        return view('books.edit_product', compact('libro'));
    }

    public function update(Request $request, book $libro)
    {
        $libro->title = $request->title;
        $libro->codigo = $request->codigo;
        $libro->isbn = $request->isbn;
        $libro->editorial = $request->editorial;
        $libro->paginas = $request->paginas;
        $libro->save();
        return redirect()->route('listar.libro');
    }
}
