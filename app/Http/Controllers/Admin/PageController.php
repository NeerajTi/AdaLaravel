<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Page;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages=Page::latest()->orderBy('id', 'asc')->paginate(100);
        return view("admin.pages.index",['data'=>$pages]);
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
    public function edit(Page $page)
    {
        //
        return view('admin.pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
        $request->validate([
            'title' => 'required'
        ]);
        
        

        $page->title = addslashes($request->title);
        $page->description = addslashes(trim($request->description));
       
        $page->update();
        return redirect()->route('admin.pages.index')
                        ->with('success','Page updated successfully.');
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
              
           
                Page::whereIn('id', $request->uids)->delete();
                return redirect()->route('admin.pages.index')
                        ->with('success','Pages deleted successfully');
            }
            catch(\Exception $e) {
                return redirect()->route('admin.pages.index')
                ->with('error-Product',$e->getMessage());
            } 
        }else if ($request->has('Submit_status')) 
        {
           
            
            try {
              
           
                Page::whereIn('id', $request->uids)->update(['status' => $request->status]);
                return redirect()->route('admin.pages.index')
                        ->with('success','Pages Stauts changed successfully');
            }
            catch(\Exception $e) {
                return redirect()->route('admin.pages.index')
                ->with('error-Product',$e->getMessage());
            } 
        }

    }
}
