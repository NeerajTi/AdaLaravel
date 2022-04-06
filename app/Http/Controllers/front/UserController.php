<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('front.myaccount.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view("front.myaccount.updatepwd");
    }
    public function changepwd(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->route('front.users.updatepwd')
                ->with('success','Password change successfully.');
    }
    public function update(Request $request, User $user)
    {
        //
        $user->update($request->all());
  
        return redirect()->route('users.edit',$user->id)
                        ->with('success','Your profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function register()
    {

      return view('auth.register');
    }
    public function login()
    {

      return view('auth.login');
    }
    public function forgetpwd()
    {

        return view("front.auth.forgetpwd");
    }
    public function dashboard()
    {
       
        return view("front.myaccount.dashboard");
    }
    public function myaccount()
    {

        if (Auth::check()) {
            // The user is logged in...
            return redirect('/my-account')->with('status', 'Profile updated!');
        }else
        {
            return redirect('/login');
        }
    }
}
