
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Blank Page</h4>
      <p class="mg-b-0">DPage Description</p>
    </div>
</div>

      <div class="br-pagebody">
      <form action="{{ Route('fupdate',$users->id) }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="name">User Name</label> 
              <input type="text" name="name" id="name" placeholder="Enter User Name" class="form-control" value="{{$users->name }}">
              
             </div>

             <div class="form-group">
               <label for="email">Enter User Email</label>
               <input name="email" id="email" placeholder="Enter User Email" class="form-control" value="{{$users->email}}"> 

             </div>

            </div>
            <div class="col-sm-6">

             
             <div class="form-group">
              <label for="role">User Role</label>
              <select name="role" id="role" class="form-control">
                <option value="">-----Select Role-----</option>
                <option value="1" @if ($users->role == 1) selected  @endif>Admin</option>
                <option value="2" @if ($users->role == 2) selected  @endif>Accounts</option>
                <option value="0" @if ($users->role == 0) selected  @endif>Register</option>
              </select>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Update Users</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
      </div>
@endsection
