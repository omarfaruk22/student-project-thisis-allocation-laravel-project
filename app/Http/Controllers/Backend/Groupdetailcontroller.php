<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Backend\St_group_detail;

class Groupdetailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupd=St_group_detail::orderby('id', 'asc')->get();
        return view('backend.pages.group_details.managegroupdetail',compact('groupd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.group_details.add_group_details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  
    {
     
        $St_group_detail = new St_group_detail();
        $request->validate([
            'group_id'=>'required',
            'student_id'=>'required'
           
        ]); 
        $St_group_detail->group_id= $request->group_id;
        $St_group_detail->student_id= $request->student_id;
        $St_group_detail->semister= $request->semister;
        $St_group_detail->session= $request->session;
      
        $St_group_detail->save();
        return redirect()->route('dcreate');
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
    public function dedit($id)
    {
        $group_detail=St_group_detail::find($id);
        return view('backend.pages.group_details.edit_Gdetails',compact('group_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dupdate(Request $request, $id)
    {
        $group_details =St_group_detail::find($id);
        $group_details->group_id= $request->group_id;
        $group_details->student_id= $request->student_id;
        $group_details->semister= $request->semister;
        $group_details->session= $request->session;
        $group_details->update();
        return redirect()->route('dmanage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ddelete($id)
    {
        $delete=St_group_detail::find($id);
        $delete->delete();
        return redirect()->route('dmanage');
    }
}
