<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;
use Hash;
use Auth;
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tm_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname','lastname','email','phone','city','state','zip','country','role'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public  function register($data)
    {
        try
		{
			
			$this->firstname=$data['fname'];
			$this->lastname=$data['lname'];
			$this->email=$data['email'];
            $this->contact=$data['contact'];
            $this->image='';
			$this->_token=$data['_token'];
			$this->password=Hash::make($data['password']);
		  
			$this->save();
   
			
			
			return true;
        } 
        catch(Exception $e)
        {
            return false;
        }
    }
	
	
	
    public function updateUser($val,$filename)
    {
         $data=$this->find(Auth::id());
         $data->firstname=$val['fname'];
         $data->lastname=$val['lname'];
         $data->email=$val['email'];
         $data->contact=$val['contact'];
         $data->image=$filename;
         $data->save();
    }
    
}	

