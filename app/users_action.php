<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\users_action;
//use App\user;
//use App\actions;

use Illuminate\Database\Eloquent\Model;// as Eloquent;

class users_action extends Model //Eloquent 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    
    protected $fillable = [
        'idAction', 'idUser',
]; */
       /* DB::table('users_actions')
			->join('users', 'users_actions.idUser', '=', 'users.id')
			->join('actions', 'users_actions.idAction', '=', 'actions.id')
			->select('users_actions.*', 'users.*', 'actions,*')
			->get();    */ 

   	protected $accionxusr = 'users_accions';	
}
