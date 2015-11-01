<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('login', function() {
    $user = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
       
    );

    if (Auth::attempt($user)) {
       return Redirect::route('homepage')->withErrors('flash_notice', 'You are logged in successfully !'); 
      
    } else {
        return Redirect::route('login')->with("err_msg","Incorrect Username and Password..");
    }
});



Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
    ]);





Route::get('login',array('as'=>'login', function () {
     return View::make('layout.layout', array(
                "page_title" => 'Home',
                "title" => '',
                "top_content_layout" => 'layout-nav.layout-nav-one',
                "page" => "login",
                "status" => "home",
                "button" => ""
    ));
}));

Route::get('register',array('as'=>'register', function () {
     return View::make('layout.layout', array(
                "page_title" => 'Home',
                "title" => '',
                "top_content_layout" => 'layout-nav.layout-nav-one',
                "page" => "register",
                "status" => "home",
                "button" => ""
    ));
}));

Route::get('forgetPassword', function () {
    return view('forgetPassword');
});


Route::post('register', 'UserController@register');


/*------------Start of Group Route-----------------*/
/*
 Working : Place all route under Group for authentication
 Auhtor: Sujeet Kumar Yadav
 Date  :01/11/2015
*/

Route::group(['middleware' => 'auth'], function () {

 Route::get('/', function () {

    return View::make('layout.layout', array(
                "page_title" => 'Home',
                "title" => '',
                "top_content_layout" => 'layout-nav.layout-nav-one',
                "page" => "homepage",
                "status" => "home",
                "button" => ""
    ));
});


Route::get('homepage', array('as' => "homepage", function() {
return View::make('layout.layout', array(
                "page_title" => 'Home',
                "title" => '',
               
                "page" => "homepage",
                "status" => "home",
                "button" => ""
    ));
}));

Route::get('profile', array('as' => "profile", function() {
return View::make('layout.layout', array(
                "page_title" => 'Home',
                "title" => '',
               
                "page" => "profile",
                "status" => "home",
                "button" => ""
    ));
}));


Route::get('add', array('as' => "add", function() {
return View::make('layout.layout', array(
                "page_title" => 'Home',
                "title" => '',
               
                "page" => "add_address",
                "status" => "home",
                "button" => ""
    ));
}));

Route::get('modify', array('as' => "modify", function() {
return View::make('layout.layout', array(
                "page_title" => 'Home',
                "title" => '',
               
                "page" => "modify",
                "status" => "home",
                "button" => ""
    ));
}));



Route::post('add', 'AddressBookController@add');
Route::post('update', 'AddressBookController@update');
Route::post('getBooks', 'AddressBookController@getAddressBookByID');
Route::get('delete', 'AddressBookController@deleteBook');
Route::post('updateUser', 'UserController@updateUser');

});
/*------------End of Group Route-----------------*/

/*
Restfull Web service for AddressBook Contrller

Auhor: Sujeet kumar yadav
Date: 01/11/2015
*/
   Route::group(array('prefix' => 'api/v1'), function()
    {
        Route::resource('address_book', 'AddressBookController');
        Route::get('get-book','AddressBookController@all');
    
    });

