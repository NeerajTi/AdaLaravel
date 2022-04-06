<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Product;
use App\Order;
use App\OrderItem;
class OrderController extends Controller
{
    //
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
    {
        //$this->middleware('auth')->except(['index','show']);
        
        $this->middleware('auth')->only(['index']);
     }
    public function index()
    {
        //
        
        $orders=Order::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(100);
        
        return view("front.myaccount.orders.index",['data'=>$orders]);
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
        $user_id='';
        if (Auth::user()) {
            $user_id = Auth::id();
            $user = User::find($user_id);
            $user->name=addslashes(trim($request->first_name)).' '.addslashes(trim($request->last_name));
            $user->phone=trim($request->phone);
            $user->address=addslashes(trim($request->address));
            $user->address2=addslashes(trim($request->address));
            $user->zipcode=addslashes(trim($request->zicode));
            $user->country=addslashes(trim($request->country));
            $user->state=addslashes(trim($request->state));
            $user->update();
        }else
        {
            $user_count=User::where('email',trim($request->email))->count();
            if($user_count>0)
            {
                $userDetail=User::firstWhere('email',trim($request->email));
                $user_id = $userDetail->id;
                $user = User::find($user_id);
                $user->name=addslashes(trim($request->first_name)).' '.addslashes(trim($request->last_name));
                $user->phone=trim($request->phone);
                $user->address=addslashes(trim($request->address));
                $user->address2=addslashes(trim($request->address));
                $user->zipcode=addslashes(trim($request->zicode));
                $user->country=addslashes(trim($request->country));
                $user->state=addslashes(trim($request->state));
                $user->update();  
            }else
            {
                $user = new User;
                $user->name=addslashes(trim($request->first_name)).' '.addslashes(trim($request->last_name));
                $user->phone=trim($request->phone);
                $user->email=trim($request->email);
                $user->password=Hash::make(addslashes(trim('12345678')));
                $user->address=addslashes(trim($request->address));
                $user->address2=addslashes(trim($request->address));
                $user->zipcode=addslashes(trim($request->zicode));
                $user->country=addslashes(trim($request->country));
                $user->state=addslashes(trim($request->state));
                $user->save();
                $user_id = $user->id;
            }
        }
                $order=new Order;
                $order->user_id=$user_id;
                $order->first_name=addslashes(trim($request->first_name));
                $order->last_name=addslashes(trim($request->last_name));
                $order->phone=trim($request->phone);
                $order->email=trim($request->email);
                $order->address=addslashes(trim($request->address));
                $order->address2=addslashes(trim($request->address));
                $order->zipcode=addslashes(trim($request->zicode));
                $order->country=addslashes(trim($request->country));
                $order->state=addslashes(trim($request->state));
                $order->save();
                $orderdid=$order->id;
                $orderid='CNFT'.str_pad($orderdid,5,"0",STR_PAD_LEFT);
                Order::find($orderdid)->update(['orderId'=> $orderid]);

                if(session('cart'))
                {
                    $total = 0;
                    foreach(session('cart') as $id => $details)
                    {
                    $orderItem=new OrderItem;
                    $orderItem->order_id=$orderdid;
                    $orderItem->name=$details['name'];
                    $orderItem->product_id=$id;
                    $orderItem->price=$details['price'];
                    $orderItem->quantity=$details['quantity'];
                    $orderItem->image=$details['photo'];
                    $orderItem->save();
                    $total +=($details['price'] * $details['quantity']);
                    }
                    Order::find($orderdid)->update(['total'=> $total]);
                    Session::forget('cart');
                }
                return redirect()->route('order-success')
                ->with('success_order',"Your order $orderid  has been placed successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
        return view('front.myaccount.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
