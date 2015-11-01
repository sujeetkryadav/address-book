<?php

namespace App\Http\Controllers\Auth;
use Input;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
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
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
   /**
     * Access a login url .
     *@author Sujeet Kumar
     * 
     */
    public function getLogin() {
        return view('login');
    }

  /**
     * Authenticate a  user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     * @author Sujeet Kumar
     */
  public function postLogin() {

    $user=Input::all();
    if(Auth::attempt(['email' => $user['email'], 'password' => $user['password']]))
    {
       return redirect('schoolProfile')->with("msg","Data successfully inserted");
    }
   else
    {
       return redirect('login')->with("err_msg","Incorrect Username and Password..");
   // return "Login fail";
    }
  }
}
