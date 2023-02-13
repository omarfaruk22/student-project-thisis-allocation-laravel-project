
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Add Research Field</h4>
      <p class="mg-b-0">Research Details</p>
    </div>
</div>

      <div class="br-pagebody">
        <form action="{{ Route('pinsert') }}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-sm-6">
          <div class="form-group">
              <label for="faculty_id">Faculty ID</label> 
              <input type="text" name="faculty_id" id="faculty_id" placeholder="Enter Faculty Id" class="form-control" value="{{ old('faculty_id') }}">
              <span class="text-danger">
                @error('faculty_id')
                  {{ $message }}
                @enderror
              </span>
             </div>

          	 <div class="form-group">
              <label for="title">Research Field</label> 
              <input type="text" name="title" id="title" placeholder="Enter Research Field" class="form-control" value="{{ old('title') }}">
              <span class="text-danger">
                @error('title')
                  {{ $message }}
                @enderror
              </span>
             </div>
             <div class="form-group">
              <label for="description">Description</label> 
              <input type="text" name="description" id="description" placeholder="Enter a Description" class="form-control" value="{{ old('description') }}">
              <span class="text-danger">
                @error('description')
                  {{ $message }}
                @enderror
              </span>
             </div>
             <div class="form-group">
              <label for="image">Image</label> 
              <input type="file" name="image" id="image" placeholder="image" class="form-control" value="{{ old('description') }}">
              <span class="text-danger">
                @error('image')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Add Research Field</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
</div>
@endsection