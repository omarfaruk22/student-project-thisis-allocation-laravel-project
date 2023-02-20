<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Models\Allocation;
use App\Models\Backend\group;

use Illuminate\Http\Request;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test3=auth::guard('faculty')->user();
        $facultyshow=Post::where('faculty_id',$test3->id)->with('group_show','faculty_show')->get();
        $facultyshows=Comment::where('faculty_id',$test3->id)->with('group_shows','faculty_shows')->get();
        $message=Allocation::where('supervisor',$test3->id)->where('status',2)->with('allocations','group_info','faculty_info','project_info')->get();
     
       return view('faculty_DBD.pages.message.faculty_post',compact('message','test3','facultyshow','facultyshows'));
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
    public function poststore(Request $request)
    {
        $stdata=new Post();
        $stdata->faculty_id=$request->faculty_id;
        $stdata->group_id=$request->group_id;
        $stdata->post_des=$request->post_des;
        $stdata->save();
        
        session()->flash('message', 'Message sent successfully!');
 
    return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
   
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function studentmsg(Request $request)
    {
        $studentshow=Post::where('group_id',$request->id)->with('group_show','faculty_show')->get();
        $studentshows=Comment::where('group_id',$request->id)->with('group_shows','faculty_shows')->get();
        $message1=Allocation::where('group_id',$request->id)->where('status',2)->with('allocations','group_info','faculty_info','project_info')->get();
        if($message1){
            return view('student_DBD.pages.message.student_comment',compact('message1','studentshow','studentshows'));
            

        }else{
           
            return' your aren,t student here';
        }
    }
    public function checkit(){
        return view('student_DBD.pages.message.student_msg');


    }
// student comment section ajax 

// end student comment section ajax 
    public function studentcomment(Request $request ){
       
        $comment=new Comment();
        $comment->faculty_id=$request->faculty_id;
        $comment->group_id=$request->group_id;
        $comment->comment_des=$request->comment_des;
        $comment->save();
        return redirect()->back();
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
