
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Group  Page</h4>
      <p class="mg-b-0">DPage Description</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('ginsert') }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="gname">Student Group Name</label> 
              <input type="text" name="gname" id="gname" placeholder="Enter Group Name" class="form-control" value="{{ old('gname') }}">
              <span class="text-danger">
                @error('gname')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Add Group</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
</div>
@endsection