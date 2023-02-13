
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
      <form action="{{ Route('register') }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">
          @if(session()->has('message'))
          <span style="color:green">{{session('message')}} </span>
      
          @endif
          	 <div class="form-group">
              <label for="name">User Name</label> 
              <input type="text" name="name" id="name" placeholder="Enter User Name" class="form-control" value="{{ old('name') }}">
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
               <label for="email">Enter User Email</label>
               <input name="email" id="email" placeholder="Enter User Email" class="form-control">{{ old('email') }}</input>

              <span class="text-danger">
                @error('email')
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
               <button class="form-control btn btn-info" >Register Users</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
      </div>
@endsection
