<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Edited by HeinHtetAung for admin_user_middleware
    protected function authenticated($request, $user)
    {

        if($user->role == 1) {
            //return redirect()->intended('/admin');
            //echo "<pre>";  echo "</pre>"; exit;
            //return redirect()->route("admin.index");
        }else{
            return redirect()->intended('/');            
        }

        //return redirect()->intended('/');
    }

    public function logout(Request $request)
    {
        $role = Auth::user()->role;
        $this->guard()->logout();

        $request->session()->invalidate();
        if($role == '1'){
            return redirect()->route("admin.index");
        }else{
            return redirect('/');
        }
    }
}
