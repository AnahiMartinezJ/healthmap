<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\users_action;

class CasosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //protected $redirectTo = '/';
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function casos()
    {


        $usuarios = User::all();
        
        //Registro de actividad
        $accionxusr = new users_action;
        $accionxusr->idAction =8;
        $accionxusr->idUser =Auth::user()->id;
        $accionxusr->save();
        //
        $usuarios = User::where('jerarquia', '!=' , 'Root')->get();
        
        return view('casos.casos', array('casos'));
    }
    
    protected function validator(Request $request)//array $data)
    {
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required|max:300',
            'responsable' => 'required|max:255',
            't-reporte' => 'required|max:255',
            'institucion' => 'required|max:255',
            'direccion' => 'required|max:255',
            'longitud' => 'required|numeric',
            'latitud' => 'required|numeric',
            'altitud' => 'required|numeric',
            'agente' => 'required|max:255',
            'num-casos' => 'required|numeric',
            'num-sospechosos' => 'required|numeric',
            'num-probables' => 'required|numeric',
            'num-confirmados' => 'required|numeric',
            'laboratorio' => 'required|max:255',
            'distribucion' => 'required|max:255',
            'num-hospitalizados' => 'required|numeric',
            'num-muertos' => 'required|numeric',
            'num-intensivos' => 'required|numeric',
            'd-incubacion' => 'required|max:255',
            'd-enfermedad' => 'required|max:255',
            'signos' => 'required|max:255',
            'transmision' => 'required|max:255',
            'detectado' => 'required|max:255',
            'reportado' => 'required|max:255'
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(Request $request)//array $data)
    {
        DB::table('casos')->insert([
          'titulo' =>  $request->input('titulo'),/*$data['titulo'],*/
          'descripcion' => $request->input('descripcion'),
          'responsable' => $request->input('responsable'),
          't-reporte' => $request->input('t-reporte'),
          'institucion' => $request->input('institucion'),
          'direccion' => $request->input('direccion'),
          'longitud' => $request->input('longitud'),
          'latitud' => $request->input('latitud'),
          'altitud' => $request->input('altitud'),
          'agente' => $request->input('agente'),
          'num_casos' => $request->input('num-casos'),
          'num_sospechosos' => $request->input('num-sospechosos'),
          'num_probables' => $request->input('num-probables'),
          'num_confirmados' => $request->input('num-confirmados'),
          'laboratorio' => $request->input('laboratorio'),
          'distribucion' => $request->input('distribucion'),
          'num_hospitalizados' =>$request->input('num-hospitalizados'),
          'num_muertos' => $request->input('num-muertos'),
          'num_intensivos' => $request->input('num-intensivos'),
          'd_incubacion' => $request->input('d-incubacion'),
          'd_enfermedad' => $request->input('d-enfermedad'),
          'signos' => $request->input('signos'),
          'transmision' => $request->input('transmision'),
          'detectado' => $request->input('detectado'),
          'reportado' => $request->input('reportado')
          ]);
        //return Redirect::route("/");//redirect()->route("/");
        return Redirect::to('/');
    }
    
}