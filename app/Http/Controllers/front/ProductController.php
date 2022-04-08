<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\User;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    public function index()
    {
        //
        $products=Product::where('user_id',auth()->user()->id)->orderBy('created_at', 'desc')->paginate(100);
        return view("front.myaccount.products.index",['data'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("front.myaccount.products.create");
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
        $user = User::find(auth()->user()->id);
       
        $request->validate([
            'name' => 'required',
            'price' => 'required',
			'shortdesc'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images/products'), $imageName);
        $product = new Product;

        $product->name = addslashes($request->name);
        $product->price = addslashes(trim($request->price));
        $product->detail = addslashes(trim($request->description));
		$product->shortdesc = addslashes(trim($request->shortdesc));
        $product->image=$imageName;
        $product->user_id=auth()->user()->id;
        $product->save();
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $products=Product::latest()->where('id','!=',$product->id)->paginate(4);
		return view('front.products.show',compact('product','products'));
    }
    public function searchmarketplace(Request $req)
    {

        $products=Product::latest()->Where('name', 'like', '%' . trim($req->q) . '%')->paginate(100);
		return view('front.products.search',compact('products'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('front.myaccount.products.edit',compact('product'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'name' => 'required',
            'price' => 'required',
			'shortdesc'=>'required'
        ]);
        if($request->image!='' )
        {
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images/products'), $imageName);
    }
        

        $product->name = addslashes($request->name);
        $product->price = addslashes(trim($request->price));
        $product->detail = addslashes(trim($request->description));
		$product->shortdesc = addslashes(trim($request->shortdesc));
        if($request->image!='')
        $product->image=$imageName;
       
        $product->update();
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully.');
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
              
           
                Product::whereIn('id', $request->uids)->delete();
                return redirect()->route('products.index')
                        ->with('success','Products deleted successfully');
            }
            catch(\Exception $e) {
                return redirect()->route('products.index')
                ->with('error-Product',$e->getMessage());
            } 
        }else if ($request->has('Submit_status')) 
        {
           
            
            try {
              
           
                Product::whereIn('id', $request->uids)->update(['status' => $request->status]);
                return redirect()->route('products.index')
                        ->with('success','Products Status updated successfully');
            }
            catch(\Exception $e) {
                return redirect()->route('products.index')
                ->with('error-Product',$e->getMessage());
            } 
        }

    }


}
