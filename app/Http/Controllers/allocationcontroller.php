<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\group;
use App\Models\Allocation;
use App\Models\Allocation_detail;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class allocationcontroller extends Controller
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
       $test1=auth::guard('faculty')->user();
      $show=Allocation::where('supervisor',$test1->id)->where('status',2)->with('allocations','group_info','faculty_info','project_info')->get();
     
     return view('faculty_DBD.pages.allocated.allocation_show', compact('show'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'group_id'=>'required',
        //     'semister'=>'required',
        //     'year'=>'required',
        //     'program'=>'required',
        //     'phase'=>'required',
        //     'supervisor'=>'required',
        //     'project'=>'required',
        //     'description'=>'required',
        //     'student_id'=>'required',
        //     'name'=>'required',
        //     'email'=>['required', 'string', 'email', 'max:255'],
        //     'phone'=>'required',
        //     'cgpa'=>'required'
           
        // ]); 
        
       
        $userfind=Allocation::where('group_id',  $request->group_id)->first();
        if($userfind){
            
           
            return redirect()->route('check')->with('message','your group already exist');
           
       
         }else{

           $field=Allocation::where('supervisor',  $request->supervisor)->count();

            if($field>=4){

               
                
                return redirect()->route('check')->with('message','this faculty already booked');
                

                

       }else{
           $allocation=Allocation::create([
            'group_id'=>$request->group_id,
            'semister'=>$request->semister,
            'year'=>$request->year,
            'program'=>$request->program,
            'phase'=>$request->phase,
            'supervisor'=>$request->supervisor,
            'project'=>$request->project, 
            'description'=>$request->description,
            'date'=>$request->date,
    
        ]);
    
    
    foreach($request->s_ids as $key=>$s_id)
    {
        
       $test = Allocation_detail::create([
            'allocation_id' => $allocation->id,
            'student_id' => $s_id,
            'name' => $request->name[$key],
            'email' => $request->email[$key],
            'phone' => $request->phone[$key],
            'cgpa' => $request->cgpa[$key],
        ]);
    // dd($test);
    }
    return redirect()->route('check')->with('message','Thank you successfully submitted');

    }
 
    
}


        // return redirect()->route('ainsret');
    


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // this is student field part 
    public function show($id)
    {
        
        
       $shows=Allocation::where('group_id',$id)->with('allocations','group_info','faculty_info','project_info')->get();
 
      return view('student_DBD.pages.allocat_s_show', compact('shows'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminshow($id)
    {
        // $shows=Allocation::where('group_id',$id)->with('allocations','group_info','faculty_info','project_info')->get();
 
        // return view('student_DBD.pages.allocat_s_show', compact('shows'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminallocatshow()
    {
        $adminshow=Allocation::orderby('id', 'asc')->with('allocations','group_info','faculty_info','project_info')->get();
 
      return view('backend.pages.contact.adminallocatshow', compact('adminshow'));
    }

    // this is allocatted group status edit 
    public function editallocatadmin($id){
        $allocatedit=Allocation::with('allocations','group_info','faculty_info','project_info')->find($id);
        return view('backend.pages.contact.edit_allocat',compact('allocatedit'));

    }
    // this is allocatted group status update 
    public function updateallocatadmin(Request $request, $id){
    $allocatgroup =Allocation::find($id);
    $allocatgroup->status= $request->status;
    $allocatgroup->update();
    return redirect()->route('allocatshowadmin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
      $alls=Allocation::where('group_id',$id)->where('status',1)->first();
      if(!$alls){
        return redirect()->back()->with('message','Sorry,If You rejected by Admin then You are available for this');

      }else{
        $delete=Allocation::find($id);
        $delete->delete();
        $delete1=Allocation_detail::where('allocation_id',$id)->delete();
        
        
        return redirect()->route('check')->with('message','Please try Again another supervisor');

      }
    }
}
