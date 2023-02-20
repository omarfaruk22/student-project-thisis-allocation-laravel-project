
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
              <label for="semister">Semister</label>
              <select class="form-control" name="semister" id="semister" required>
                <option value="">--Select Semister--</option>
                <option value="spring"@if ($group_detail->semister == 'spring') selected  @endif>Spring</option>
                <option value="summer"@if ($group_detail->semister == 'summer') selected  @endif>Summer</option>
              </select>
           
             </div>
             <div class="form-group">
              <label for="session">Session</label>
              <select class="form-control" name="session" id="session" required >
                <option value="">--Select Year--</option>
                <option value="2023"@if ($group_detail->session == '2023') selected  @endif>2023</option>
                <option value="2022"@if ($group_detail->session == '2022') selected  @endif>2022</option>
                <option value="2021"@if ($group_detail->session == '2021') selected  @endif>2021</option>
                <option value="2020"@if ($group_detail->session == '2020') selected  @endif>2020</option>
                <option value="2019"@if ($group_detail->session == '2019') selected  @endif>2019</option>
              </select>
              
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