
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Faculty Page</h4>
      <p class="mg-b-0">Faculty Page</p>
    </div>
</div>

      <div class="br-pagebody">
      <form action="{{ Route('fyupdate',$facalties->id) }}" method="post">
          @csrf
        <div class="row">
          <div class="col-sm-6">

          	 <div class="form-group">
              <label for="fname">Faculty Name</label> 
              <input type="text" name="fname" id="fname" placeholder="Enter Faculty Name" class="form-control" value="{{$facalties->fname }}">
              
             </div>

             <div class="form-group">
               <label for="femail">Enter User Email</label>
               <input name="femail" id="femail" placeholder="Enter Faculty Email" class="form-control" value="{{$facalties->femail}}"> 

             </div>

            </div>
            <div class="col-sm-6">

             <div class="form-group">
               <button class="form-control btn btn-info" >Update Users</button>
             </div>

            </div>
          </div><!-- col-3 -->
        </form>
      </div><!-- br-pagebody -->
      </div>
@endsection
