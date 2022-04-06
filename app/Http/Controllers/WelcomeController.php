<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class WelcomeController extends Controller
{
    //
	public function index(Request $request)
    {
		$products=Product::orderBy('id', 'desc')->paginate(12);
        $proc=Product::count();
        $totalpages=ceil($proc/12);
		if ($request->ajax()) {
    		$view = view('data',compact('products'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('welcome',compact('products','totalpages'));
    }
}
