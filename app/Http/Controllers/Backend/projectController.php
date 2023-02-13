<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Project;
use Image;
use File;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project=Project::orderby('id','asc')->get();
        return view('backend.pages.project.manageProject',compact('project'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.pages.project.addProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $project=new Project();
         $request->validate([
            'faculty_id'=>'required',
            'title'=>'required',
            'description'=>'required'
         ]);
         $project->faculty_id= $request->faculty_id;
         $project->title= $request->title;
         $project->description= $request->description;
         if ($request->image) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/projectimage/' . $imageName);
            Image::make($image)->save($location);
            $project->image = $imageName;
            // $product->save();
            // return redirect()->route('dashboard');
        }
         $project->save();
         return redirect()->route('pcreate');


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
    public function edit($id)
    {
        $projects=Project::find($id);
        return view('backend.pages.project.editProject',compact('projects'));
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
        $projects =Project::find($id);
        $projects->faculty_id= $request->faculty_id;
        $projects->title= $request->title;
        $projects->description= $request->description;
        if($request->image) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/projectimage/' . $imageName);
            Image::make($image)->save($location);
            $projects->image = $imageName;
            // $product->save();
            // return redirect()->route('dashboard');
        }else{
            unset($projects['image']);
        }
        $projects->update();
        return redirect()->route('pmanage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete=Project::find($id);
        $delete->delete();
        return redirect()->route('pmanage');
    }
}
