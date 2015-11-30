<?php

namespace etl\Http\Controllers\Auth;

use etl\User;
use Validator;
use etl\Http\Controllers\Controller;
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
    protected $username = 'user'; 
    
    /**
    * Handle user login
    *
    */   
    # Where should the user be redirected to if their login succeeds?
    protected $redirectPath = '/';

    # Where should the user be redirected to if their login fails?
    //protected $loginPath = '/login';
    protected $loginPath = '/home';

    # Where should the user be redirected to after logging out?
    //protected $redirectAfterLogout = '/login';
    protected $redirectAfterLogout = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }



    /* NOTE: The following handles 1) data validation 2) record creation for users */
    /* NOTE: Any changes below must have a coresponding change to file "User.php" */

    /**
     * Get a validator for an incoming registration request.
     * NOTE: Any changes below must have a coresponding change to "function create()"
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'user' => 'required|max:255|unique:users',
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
            'user' => $data['user'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
