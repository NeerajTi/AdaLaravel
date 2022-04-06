<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners=Banner::latest()->orderBy('id', 'asc')->paginate(100);
        return view("admin.banners.index",['data'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.banners.create");
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
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images/banners'), $imageName);
        $banner = new Banner();
        $banner->title = addslashes($request->title);
        $banner->detail = addslashes($request->detail);
        $banner->image=$imageName;
        $banner->save();
        return redirect()->route('admin.banners.index')
                        ->with('success','Banner created successfully.');
        
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
    public function edit(Banner $banner)
    {
        //
        return view('admin.banners.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
        
        if($request->image!='' )
        {
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images/banners'), $imageName);
    }
        
         $banner->title = addslashes($request->title);
         $banner->detail = addslashes($request->detail);
        if($request->image!='')
        $banner->image=$imageName;
       
        $banner->update();
        return redirect()->route('admin.banners.index')
                        ->with('success','Banner updated successfully.');
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
              
           
                Banner::whereIn('id', $request->uids)->delete();
                return redirect()->route('admin.banners.index')
                        ->with('success','Products deleted successfully');
            }
            catch(\Exception $e) {
                return redirect()->route('admin.banners.index')
                ->with('error-Product',$e->getMessage());
            } 
        }

    }
}
