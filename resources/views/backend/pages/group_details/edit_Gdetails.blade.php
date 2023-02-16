
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Group details  Page</h4>
      <p class="mg-b-0">DPage Description</p>
    </div>
</div>

<div class="br-pagebody">
        <form action="{{ Route('dupdate',$group_detail->id) }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="group_id">Student Group ID</label> 
              <input type="text" name="group_id" id="group_id" placeholder="Enter Group id" class="form-control" value="{{ $group_detail->group_id }}">
             </div>
             <div class="form-group">
              <label for="student_id">Student Group Name</label> 
              <input type="text" name="student_id" id="student_id" placeholder="Enter student id" class="form-control" value="{{ $group_detail->student_id }}">
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Update Student group details</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
</div>
@endsection