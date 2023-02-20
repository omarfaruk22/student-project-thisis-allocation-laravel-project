
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Area of Interest</h4>
      <p class="mg-b-0">Edit Area of Interest</p>
    </div>
</div>

<div class="br-pagebody">
        <form action="{{ Route('pupdate',$projects->id) }}" method="post"  enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
              <label for="faculty_id">Faculty ID</label> 
              <input type="text" name="faculty_id" id="faculty_id" placeholder="Faculty Id" class="form-control" value="{{$projects->faculty_id  }}">
              <span class="text-danger">
                @error('faculty_id')
                  {{ $message }}
                @enderror
              </span>
             </div>

          	 <div class="form-group">
              <label for="title">Area of Interest</label> 
              <input type="text" name="title" id="title" placeholder="Area of Interest" class="form-control" value="{{ $projects->title }}">
             </div>
             <div class="form-group">
              <label for="description"> Description</label> 
              <input type="text" name="description" id="description" placeholder="Edit Description" class="form-control" value="{{ $projects->description }}">
             </div>
             <div class="form-group">
              <label for="image"> image</label> 
              <input type="file" name="image" id="image" placeholder="image" class="form-control" >
              <img src="{{asset('backend/projectimage/'.$projects->image)}}" width="100px" height="50px">
             </div>
            

             <div class="form-group">
               <button class="form-control btn btn-info" >Update Area of Interest Details</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
</div>
@endsection