<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\users_action;

use Illuminate\Database\Eloquent\Model;// as Eloquent;

class users_action extends Model //Eloquent 
{
    
   	protected $accionxusr = 'users_accions';	
}
