<?php

namespace App\Http\Controllers;
use Input;
use View;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
       //
    }
	
	public function register()
	{
		$user_obj=new User();
    	$data=Input::all();
    	$user_obj->register($data);
    	return redirect('login')->with("msg","Data successfully inserted");
		
	}

	public function updateUser()
	{
		
		$user_obj=new User();

		$data=Input::all();
		//print_r($data);
		$validator = Validator::make(
        ['file'=>$data['file']],
        ['file' =>'required|image|mimes:jpeg,bmp,png']);
              
        if($validator->fails())
        {
			return redirect('profile')->withErrors($validator, 'msg');
        }
        else
        {
			
			echo $filename=Input::file('file')->getClientOriginalName();
			Input::file('file')->move('public/assets/prifile_pic',$filename);
			$user_obj->updateUser($data,$filename);	
			
        }
		    
			return redirect('profile')->with("msg","Profile successfully updates..");
	}
	
}
