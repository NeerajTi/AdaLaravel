<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\User;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=Order::latest()->orderBy('created_at', 'desc')->paginate(100);
        return view("admin.orders.index",['data'=>$orders]);
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
    public function show(Order $order)
    {
        //
        return view('admin.orders.show',compact('order'));
    }
    public function byusers($id)
    {
        $user=User::firstWhere('id',$id);
        $orders=Order::where('user_id',$id)->orderBy('created_at', 'desc')->paginate(100);
        return view("admin.orders.ordersbyuser",['data'=>$orders,'user'=>$user]);

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
    public function multiaction(Request $request)
    {
        if ($request->has('Submit_delete')) 
        {
           
            
            try {
              
           
                Order::whereIn('id', $request->uids)->delete();
                return redirect()->route('admin.orders.index')
                        ->with('success','Order deleted successfully');
            }
            catch(\Exception $e) {
                return redirect()->route('admin.orders.index')
                ->with('error-Order',$e->getMessage());
            } 
        }

    }
}
