<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/panel';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'user';
        //return view('/home', compact('usuario'));
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
        ['user' => $request->user, 'password' => $request->password], $request->filled('remember'));
    }

    protected function validateLogin(Request $request)
    {
       $request->validate([
            'user' => 'required|string',
            'password' => 'required|string',
        ]); 
    }

   

}
