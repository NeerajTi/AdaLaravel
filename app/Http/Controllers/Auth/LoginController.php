<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
    protected $username;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo()
    {
        
        switch(auth()->user()->is_admin){
        case 1:
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;
                default:
                $this->redirectTo = '/my-account';
                return $this->redirectTo;
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();
    }
        /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findUsername()
    {
        $login = request()->input('uemail');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }
    public function username()
    {
        return $this->username;
    }
   /*public function loginadmin(Request $request)
    {   
        
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
       
        
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'],'is_admin'=>1)))
        {
           
           
                return redirect()->route('admin-dashboard');
           
        }else{
            
                return redirect()->route('admin-login')
                ->with('error','Username or Password Are Wrong Or You are not an admin.'); 
            
        }
          
    }*/

    public function logout(Request $request)
{
    $adminCheck=auth()->user()->is_admin;
    $this->guard()->logout();

    $request->session()->flush();

    $request->session()->regenerate();
    if($adminCheck==1)
    return redirect('/admin/login');
    else
    return redirect('/login');
}
}
