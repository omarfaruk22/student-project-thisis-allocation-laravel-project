<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Backend\group;

class groupcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups=group::orderby('id', 'asc')->get();
        return view('backend.pages.group.manage_st_group',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.group.add_group');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $reqst)
    
    {
        $group = new group();
        $reqst->validate([
            'gname'=>'required'
           
        ]); 
        $group->gname= $reqst->gname;
      
        $group->save();
        return redirect()->route('dcreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gshow($id)
    {
        // $show = group::all();
        // return response()->json([
        //     'data'=>$show
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gedit($id)
    {
        $group=group::find($id);
        return view('backend.pages.group.edit_group',compact('group'));
     }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gupdate(Request $request, $id)
    {
        $group =group::find($id);
        $group->gname= $request->gname;
        $group->update();
        return redirect()->route('groupmanage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gdelete($id)
    {
        $delete=group::find($id);
        $delete->delete();
        return redirect()->route('groupmanage');
    }

}