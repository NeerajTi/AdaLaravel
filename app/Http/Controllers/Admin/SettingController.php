<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
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
    public function edit(Setting $setting)
    {
        //
        return view('admin.settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteimage($id)
    {
        Setting::where('id',$id)->update(['logo'=>'']);
        return redirect()->route('admin.settings.edit',$id)
                        ->with('success','Logo Deleted successfully.');

    }
    public function update(Request $request, Setting $setting)
    {
        //
    
        if($request->logo!='' )
        {
        $imageName = time().'.'.$request->logo->extension();  
     
        $request->logo->move(public_path('images'), $imageName);
        }
        

        $setting->connect_title = addslashes($request->connect_title);
        $setting->footermenu_title = addslashes($request->footermenu_title);
        $setting->aboutus_title = addslashes($request->aboutus_title);
        $setting->aboutus_text = addslashes($request->aboutus_text);
        $setting->subscribe_title = addslashes($request->subscribe_title);
        $setting->subscribe_text = addslashes($request->subscribe_text);
        $setting->socialmedia = serialize($request->social);
        if($request->logo!='')
        $setting->logo=$imageName;
       
        $setting->update();
        return redirect()->route('admin.settings.edit',$setting->id)
                        ->with('success','Settings updated successfully.');
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
