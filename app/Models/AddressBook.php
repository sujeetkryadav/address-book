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
class AddressBook extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tm_address_detail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','name','address1','address2','city','state','zip','country','role'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public  function add($data)
    {
        try
		{
			
			$this->title=$data['title'];
			$this->person_name=$data['name'];
			$this->contact=$data['contact'];
            $this->address1=$data['add1'];
            $this->address2=$data['add2'];
            $this->state=$data['state'];
            $this->district=$data['district'];
            $this->city=$data['city'];
			$this->_token=$data['_token'];
			
			$this->save();
   
			
			
			return true;
        } 
        catch(Exception $e)
        {
            return false;
        }
    }

    public function getAddressBook()
    {
       $data= $this->get();
       return $data;
    }
	
	public function getAddressBookById($id)
    {
       $data=$this->find($id);
        return $data;
    }

    public function update_book($data)
    {
        $val=$this->find($data['id']);
        $val->title=$data['title'];
        $val->person_name=$data['name'];
        $val->contact=$data['contact'];
        $val->address1=$data['add1'];
        $val->address2=$data['add2'];
        $val->state=$data['state'];
        $val->district=$data['district'];
        $val->city=$data['city'];
        $val->save();
    }

    public function delete_book($id)
    {
         $val=$this->find($id);
         $val->delete();
    }
    
     public function allBook()
    {
         $val=AddressBook::all();
         return $val;
    }
    
}	

