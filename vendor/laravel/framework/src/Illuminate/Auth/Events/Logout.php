<?php

namespace Illuminate\Auth\Events;

use Illuminate\Queue\SerializesModels;

use App\users_action;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class Logout
{
    use SerializesModels;

    /**
     * The authenticated user.
     *
     * @var \Illuminate\Contracts\Auth\Authenticatable
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function __construct($user)
    {//cerrar sesion
		  $accionxusr = new users_action;
        $accionxusr->idAction =2;
        $accionxusr->idUser = Auth::user()->id;
        $accionxusr->save();  
        $this->user = $user;
              
    }
}
