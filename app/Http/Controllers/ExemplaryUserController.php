<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Exemplary;
use Illuminate\Http\Request;

class ExemplaryUserController extends Controller
{
    public function index()
    {
        $exemplares = Exemplary::all();
        $usuarios = User::all();
        return view('ejemplares.showproducts', compact('usuarios', 'exemplares'));
    }

    public function asociarRol(Request $request)
    {
        $usuario = User::find($request->user_id);
        $usuario->ExemplaryUser()->attach($request->exemplary_id);
        return $usuario;
    }
}
//
//\App\Models\User::all();
//$user = \App\Models\user::find(1);
//user->examplary()->detach(1);  

