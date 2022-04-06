<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\User;
class CartController extends Controller
{
    //
    public function cart()
    {

        return view("front.cart.cart");
    }
    public function ordersuccess()
    {

        return view("front.cart.ordersuccess");
    }
    public function checkout()
    {

        if(session('cart'))
        {
            $user=['name'=>'','email'=>'','address'=>'','phone'=>'','zipcode'=>''];
            if (Auth::user()) {
                $user = Auth::user();
                $user=['name'=>$user->name,'email'=>$user->email,'address'=>$user->address,'phone'=>$user->phone,'zipcode'=>$user->zipcode];
            }
        return view("front.cart.checkout",compact('user'));

        }
        else
        return redirect('/cart')->with('success_empty', 'Your cart is empty!');
    }
    public function addToCartForm(Request $request)
    {
        $id=$request->product_id;
        $qty=$request->quantity;
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => $qty,
                        "price" => $product->price,
                        "photo" => $product->image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect('/cart')->with('success_cart', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $updqnty=( $cart[$id]['quantity']+$qty);
            $cart[$id]['quantity']=$updqnty;
            session()->put('cart', $cart);
            return redirect('/cart')->with('success_cart', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => $qty,
            "price" => $product->price,
            "photo" => $product->image
        ];
        session()->put('cart', $cart);
        return redirect('/cart')->with('success_cart', 'Product added to cart successfully!');
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->image
                    ]
            ];
            session()->put('cart', $cart);
            return redirect('/cart')->with('success_cart', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect('/cart')->with('success_cart', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->image
        ];
        session()->put('cart', $cart);
        return redirect('/cart')->with('success_cart', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
