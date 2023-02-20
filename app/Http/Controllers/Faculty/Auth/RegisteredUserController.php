<?php

namespace App\Http\Controllers\Faculty\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Faculty;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Faculty.auth.register');
    }
    public function fymanage(){
        $faculty=Faculty::orderby('id','asc')->get();

        return view('Faculty.auth.manageFaculty', compact('faculty'));
  
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
      
        $faculty = new Faculty();
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'femail' => ['required', 'string', 'email', 'max:255', 'unique:faculties'],
            'password' => ['required' ],
        ]);

        
            $faculty->fname =$request->fname;
            $faculty->femail = $request->femail;
            $faculty->password = Hash::make($request->password);
            $faculty->save();
            return redirect()->route('fregister')->with('message','Registered successfully completed');
        
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
    public function edit($id){

        $facalties=Faculty::find($id);
        return view('Faculty.auth.editFaculty', compact('facalties'));

      }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $faculty =Faculty::find($id);
        $faculty->fname= $request->fname;
        $faculty->femail= $request->femail;
        $faculty->status= $request->status;
        $faculty->update();
        return redirect()->route('fymanage');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        $delete=Faculty::find($id);
        $delete->delete();
        return redirect()->route('fymanage');

        
    }

}