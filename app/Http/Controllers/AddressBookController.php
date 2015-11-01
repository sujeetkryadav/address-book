<?php

namespace App\Http\Controllers;
use Input;
use View;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AddressBook;
use Response;
class AddressBookController extends Controller
{
    public function index()
    {
       //
    }
	
	public function add()
	{
		$address=new AddressBook();
    	$data=Input::all();
    	$address->add($data);
    	return redirect('add')->with("msg","Data successfully inserted");
		
	}

	public function getAddressBook()
	{
		$address=new AddressBook();
    	$data=$address->getAddressBook();
    	return $data;
		
	}

	public function getAddressBookByID()
	{   $val=Input::all();
		$id=$val['id'];
		$address=new AddressBook();
    	$data=$address->getAddressBookById($id);
    	return $data;
		
	}

	public function update()
	{
		$address=new AddressBook();
    	$data=Input::all();
    	$address->update_book($data);
    	return redirect('modify')->with("msg","Data successfully updates..");
		
	}

  public function deleteBook()
  {
  	$id=Input::get('id');
  	$address=new AddressBook();
  	$address->delete_book($id);
    return redirect('modify')->with("msg","Data successfully delete..");

  }
	
 public function all()
 {   
     $response = [
              'address'  => []
            ];

 	 $address=new AddressBook();
 	 $data=$address->allBook();
 	 $response['address'][]=$data;
 	$statusCode = 200;
 	return Response::json($response, $statusCode);

 }
}
