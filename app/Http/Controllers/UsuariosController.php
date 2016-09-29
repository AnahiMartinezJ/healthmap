<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\User;
use App\users_action;
use Illuminate\Support\Facades\Auth;

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
        
        //Registro de actividad
        $accionxusr = new users_action;
        $accionxusr->idAction =3;
        $accionxusr->idUser =Auth::user()->id;
        $accionxusr->save();
        //
        $usuarios = User::where('jerarquia', '!=' , 'Root')->get();
        
        return view('usuarios.usuarios', array('usuarios' => $usuarios));
    }
    
    public function regresa_usuario(Request $request, $id_usuario){
        $usuario = User::find($id_usuario);
        if($usuario !== null){
            if((Auth::User()->jerarquia == 'Administrador' || Auth::User()->jerarquia == 'Root') && Auth::User()->autorizado)
                $tipo_usuario = 1;
            else
                $tipo_usuario = 0;
            return response()->json(array('status' => 'ok', 'usuario' => $usuario, 'tipo_usuario' => $tipo_usuario));
        }
        
        return response()->json(array('status' => 'error'));
    }
    
     public function cambiar_jerarquia(Request $request, $id_usuario){
        $input = $request->all();
        $usuario = User::find($id_usuario);
        if($usuario !== null){
            $usuario->jerarquia = $input['jerarquia'];
            $usuario->save();
				
				//Registro de actividad
				$accionxusr = new users_action;
      		$accionxusr->idAction =7;
   		   $accionxusr->idUser =Auth::user()->id;
   		   $accionxusr->save();   
				//            
            
            return response()->json(array('status' => 'ok', 'mensaje' => 'Â¡Se cambiÃ³ la jerarquÃ­a correctamente!'));
        }
        
        return response()->json(array('status' => 'error', 'mensaje' => 'Â¡Error al intentar cambiar la jerarquÃ­a de usuario!'));
    }
    
    public function cambiar_autorizacion(Request $request, $id_usuario){
        $usuario = User::find($id_usuario);
        if($usuario !== null){
            if($usuario->autorizado == 0){
                $usuario->autorizado = 1;
            }
            else{
                if($usuario->autorizado == 1){
                    $usuario->autorizado = 0;
                }
            }
            $usuario->save();
            return response()->json(array('status' => 'ok', 'mensaje' => 'Se cambió el estado de autorización correctamente', 'autorizado' => $usuario->autorizado, 'id' => $usuario->id));
        }
        return response()->json(array('status' => 'ok', 'mensaje' => '¡Error al intentar cambiar el estado de autorización', 'autorizado' => $usuario->autorizado, 'id' => $usuario->id));
    }
    
}
