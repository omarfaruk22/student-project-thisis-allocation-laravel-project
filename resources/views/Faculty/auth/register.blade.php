
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Faculty Page</h4>
      <p class="mg-b-0">Register a faculty</p>
    </div>
</div>

      <div class="br-pagebody">
      <form action="{{ Route('finsert') }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">
          @if(session()->has('message'))
          <span style="color:green">{{session('message')}} </span>
      
          @endif
          	 <div class="form-group">
              <label for="fname">User Name</label> 
              <input type="text" name="fname" id="fname" placeholder="Enter Faculty Name" class="form-control" value="{{ old('fname') }}">
              <span class="text-danger">
                @error('fname')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <label for="email">Enter User Email</label>
               <input name="femail" id="femail" placeholder="Enter Faculty Email" class="form-control">{{ old('femail') }}</input>

              <span class="text-danger">
                @error('femail')
                  {{ $message }}
                @enderror
              </span>
             </div>

            </div>
            <div class="col-sm-6">

             <div class="form-group">
              <label for="password">Password</label> <input type="password" name="password" id="password" placeholder="Enter password" class="form-control">
              <span class="text-danger">
                @error('password')
                  {{ $message }}
                @enderror
              </span>
             </div>
           

             <div class="form-group">
               <button class="form-control btn btn-info" >Assign Faculty</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
      </div>
@endsection
