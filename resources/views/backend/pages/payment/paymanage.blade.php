
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Edit Group  Page</h4>
      <p class="mg-b-0">Edit payment Details</p>
    </div>
</div>

<div class="br-pagebody">
        <form action="{{ Route('payupdate',$payedit->id) }}" method="post"  enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
              <label for="st_group_id">Group ID</label> 
              <input type="text" name="st_group_id" id="st_group_id" placeholder="Group Id" class="form-control" value="{{$payedit->st_group_id  }}">
              <span class="text-danger">
                @error('st_group_id')
                  {{ $message }}
                @enderror
              </span>
             </div>

          	 <div class="form-group">
              <label for="transection_one">1st Transection id</label> 
              <input type="text" name="transection_one" id="transection_one" placeholder=" 1st transection Id " class="form-control" value="{{ $payedit->transection_one }}">
             </div>
             
             <div class="form-group">
              <label for="image">1st transection</label> 
              <input type="file" name="image_one" id="image_one" placeholder=" payment image" class="form-control" >
              <img src="{{asset('backend/projectimage/'.$payedit->image_one)}}" width="100px" height="50px">
             </div>
             <div class="form-group">
              <label for="transection_two">2nd Transection id</label> 
              <input type="text" name="transection_two" id="transection_two" placeholder="Enter Group Name" class="form-control" value="{{ $payedit->transection_two }}">
             </div>
             <div class="form-group">
              <label for="image">2nd transection</label> 
              <input type="file" name="image_two" id="image_two" placeholder=" transection image" class="form-control" >
              <img src="{{asset('backend/projectimage/'.$payedit->image_two)}}" width="100px" height="50px">
             </div>
             <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">-----Edit status-----</option>
                <option value="0" @if ($payedit->status == 0) selected  @endif>0</option>
                <option value="1" @if ($payedit->status == 1) selected  @endif>1</option>
               
              </select>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Update payment Details</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
</div>
@endsection