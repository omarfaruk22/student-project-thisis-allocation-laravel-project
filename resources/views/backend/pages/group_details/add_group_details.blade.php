
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Group Details Page</h4>
      <p class="mg-b-0">DPage Description</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('dinsert') }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="group_id">Student Group Id</label> 
              <input type="text" name="group_id" id="group_id" placeholder="Enter Group Id" class="form-control" value="{{ old('group_id') }}">
              <span class="text-danger">
                @error('group_id')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="student_id">Student Id</label> 
              <input type="text" name="student_id" id="student_id" placeholder="Enter Student Id" class="form-control" value="{{ old('student_id') }}">
              <span class="text-danger">
                @error('student_id')
                  {{ $message }}
                @enderror
              </span>
             </div>
             <div class="form-group">
              <label for="semister">Semister</label>
              <select class="form-control" name="semister" id="semister" required>
                <option value="">--Select Semister--</option>
                <option value="spring">Spring</option>
                <option value="summer">Summer</option>
              </select>
           
             </div>
             <div class="form-group">
              <label for="session">Session</label>
              <select class="form-control" name="session" id="session" required >
                <option value="">--Select Year--</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
              </select>
              
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Add Group details</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
</div>
@endsection