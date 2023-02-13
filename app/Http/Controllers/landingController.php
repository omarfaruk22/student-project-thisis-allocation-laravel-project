<?php

namespace App\Http\Controllers;
use App\Models\Backend\Project;
use App\Models\Backend\group;
use App\Models\Faculty;
use App\Models\Contact;
use Illuminate\Http\Request;

class landingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $countfaculty=Faculty::count();
       $countfield=Project::count();
       $countgroup=group::count();
       $countcontact=Contact::count();
       $currentPage = 'home';
        return view('frontend.landing',compact('currentPage','countfaculty','countfield','countgroup','countcontact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentPage = 'about';
        return view('frontend.pages.about',compact('currentPage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(){
        $currentPage = 'contact';
        
        return view('frontend.pages.contact',compact('currentPage'));
    
    
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function field()
    
    {
        $currentPage = 'field';
        $showfield=Project::with('fuculty_details')->paginate(6);
        return view('frontend.pages.researchfield', compact('showfield','currentPage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
