<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'apellido-paterno' => 'required|max:255',
            'apellido-materno' => 'required|max:255',
            'titulo' => 'required|max:255',
            'licenciatura' => 'required|max:255',
            'especialidad' => 'required|max:255',
            'subespecialidad' => 'required|max:255',
            'cedula' => 'required|numeric',
            'institucion-add' => 'required|max:255',
            'ultimo-grado' => 'required|max:255',
            'jerarquia' => 'required|max:255',
            'antiguedad' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'apellido_paterno' => $data['apellido-paterno'],
            'apellido_materno' => $data['apellido-materno'],
            'titulo' => $data['titulo'],
            'licenciatura' => $data['licenciatura'],
            'especialidad' => $data['especialidad'],
            'subespecialidad' => $data['subespecialidad'],
            'cedula' => $data['cedula'],
            'institucion_add' => $data['institucion-add'],
            'ultimo_grado' => $data['ultimo-grado'],
            'jerarquia' => $data['jerarquia'],
            'fecha_nacimiento' => $data['fecha-nacimiento'],
            'antiguedad' => $data['antiguedad'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
