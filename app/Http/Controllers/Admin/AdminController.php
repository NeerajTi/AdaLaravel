<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Product;
use App\User;
use App\Order;
class AdminController extends Controller
{
    //

    public function login()
    {

        return view('admin.login');
    }
    public function dashboard()
    {
        $users=User::whereNull('is_admin')->count();
        $products=Product::count();
        $orders=Order::count();
        return view('admin.dashboard',compact('users','products','orders')); 
    }
    public function settings()
    {
        return view("admin.users.updatepwd");
    }
    public function changepwd(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->route('admin.users.updatepwd')
                ->with('success','Password change successfully.');
    }
}
