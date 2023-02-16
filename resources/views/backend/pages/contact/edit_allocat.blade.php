
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Edit Allocated group  Page</h4>
      <p class="mg-b-0">Edit Allocated group  Page</p>
    </div>
</div>

<div class="br-pagebody">
        <form action="{{ Route('updateallocat',$allocatedit->id) }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="group_id">Student Group Name</label> 
              <input type="text" name="group_id" id="group_id" placeholder="Student Group Name" class="form-control" value="{{ $allocatedit->group_info->gname }}">
             </div>
             <div class="form-group">
              <label for="student_id">Supervisor Name</label> 
              <input type="text" name="student_id" id="student_id" placeholder="Supervisor Name" class="form-control" value="{{ $allocatedit->faculty_info->fname }}">
             </div>
             <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">-----Select Status-----</option>
                <option value="0" @if ($allocatedit->status == 0) selected  @endif>Pending</option>
                <option value="2" @if ($allocatedit->status == 2) selected  @endif>Approved</option>
                <option value="1" @if ($allocatedit->status == 1) selected  @endif>Rejected</option>
              </select>
             </div>

           
             <div class="form-group">
               <button class="form-control btn btn-info" >Update Allocated group </button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
</div>
@endsection