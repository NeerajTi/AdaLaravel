<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::latest()->orderBy('name', 'asc')->paginate(100);
        return view("admin.products.index",['data'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.products.create");
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
        return redirect()->route('admin.products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
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
        return redirect()->route('admin.products.index')
                        ->with('success','Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function multiaction(Request $request)
    {
        if ($request->has('Submit_delete')) 
        {
           
            
            try {
              
           
                Product::whereIn('id', $request->uids)->delete();
                return redirect()->route('admin.products.index')
                        ->with('success','Products deleted successfully');
            }
            catch(\Exception $e) {
                return redirect()->route('admin.products.index')
                ->with('error-Product',$e->getMessage());
            } 
        }

    }
}
