<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/*
|--------------------------------------------------------------------------
| Model Users
|--------------------------------------------------------------------------
| @author Thomas
| $table 		= table name
| $fillable 	= whitelist field
| $timestamp 	= avoid auto create & update timestamp
| $hidden 		= hidding attribute
| https://laravel.com/docs/5.5/eloquent 
| https://laravel.com/docs/5.5/eloquent-serialization
|
*/

class Users extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{	
	use Authenticatable, Authorizable, CanResetPassword;
	protected $table = "users";
	protected $fillable = ['name', 'email', 'password'];
	public $timestamps = false;
	protected $hidden = ['password', 'remember_token',];    
}
