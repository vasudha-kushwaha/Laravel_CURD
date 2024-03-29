<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request; //include
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // protected function credentials(Request $request)
    // {
    //     /// this method is overriden form Illuminate\Foundation\Auth\AuthenticatesUsers; class
    //     $field = filter_var($request->get($this->uname()), FILTER_VALIDATE_EMAIL)
    //         ? $this->uname()
    //         : 'username';

    //     return [
    //         $field => $request->get($this->uname()),
    //         'password' => $request->password,
    //     ];
    // }
}
