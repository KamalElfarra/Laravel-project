<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // use this function to login with username type mobile

    public function username()
    {


        $value=request()->input("input"); //kamal@gmail.com or 0599551568
        //يتم عمل فيلتر للمدخل في اللوجين في حال كان إيميل يدخل بالإيميل في حال كان موبايل يدخل بالموبايل
       $field= filter_var($value,FILTER_VALIDATE_EMAIL)?'email':'mobile';
        //add the values to the request by merge then return the email or mobile
       request()->merge([$field=>$value]);
       return $field; //return the value who login with
    }


}
