<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\users_action;
use App\user;

use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegistroActividadController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    protected function registrodeactividad()//Request $request)
    {
    	       
		$accionxusr = new users_action;
      $accionxusr->idAction =5;
      $accionxusr->idUser =Auth::user()->id;
      $accionxusr->save();       
       
      //unión de acciones por usuario con la tabla users y actions
      $registrodeactividad = DB::table('users_actions')
			->join('users', 'users_actions.idUser', '=', 'users.id')
			->join('actions', 'users_actions.idAction', '=', 'actions.id')
			->select('users_actions.created_at', 'users.name', 'apellido_paterno','apellido_materno', 'actions.accion')
			->get(); 
      return view('registrodeactividad.registrodeactividad', array('registrodeactividad' => $registrodeactividad ));    
    }
    
}
