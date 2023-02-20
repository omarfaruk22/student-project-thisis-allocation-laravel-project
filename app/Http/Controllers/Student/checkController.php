<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Backend\group;
use App\Models\Backend\Project;
use App\Models\Faculty;
use App\Models\Payment;
class checkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student_DBD.pages.check');
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
    public function supervisor(Request $request, $id){
     
       
        $projects = Project::where('faculty_id',$id)->get();
       
        return response()->json($projects);
            
       
      
               

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
       
       
        $group_id = group::where('id',$request->id)->with('group_details')->first();
        $project=Faculty::with('project_details')->where('status', 1)->get();
        $paygroup = Payment::where('st_group_id',$request->id)->where('status',1)->first();
    
      //dd($group_id);
  
      if($paygroup){
       
        
         return view('student_DBD.pages.allocation',compact('group_id','project'));
       
      }
      else{

        return redirect()->route('check')->with('message','Your Group are dosen,t Authorised by Admin');

               
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group=group::find($id);
        return view('student_DBD.pages.allocation',compact('group'));
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
