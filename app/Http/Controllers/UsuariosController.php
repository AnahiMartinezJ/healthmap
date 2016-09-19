<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function usuarios()
    {
        $usuarios = User::all();
        return view('usuarios.usuarios', array('usuarios' => $usuarios));
    }
    
    public function regresa_usuario(Request $request, $id_usuario){
        $usuario = User::find($id_usuario);
        if($usuario !== null){
            return response()->json(array('status' => 'ok', 'usuario' => $usuario));
        }
        
        return response()->json(array('status' => 'error'));
    }
}
