@extends('faculty_DBD.master_template.template')

@section('content')

    <!-- ########## START: MAIN PANEL ########## -->
      <!-- this the main section  -->
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Faculty Dashboard</h4>
          <p class="mg-b-0">Faculty Dashboard</p>
        </div>
      </div>
       <?php 
       use App\Models\Allocation;
       use App\Models\Comment;
       use Illuminate\Support\Facades\Auth;

       $user=Auth::guard('faculty')->user();
       $allocats=Allocation::where('supervisor',$user->id)->where('status',2)->count();
       $comments=Comment::where('faculty_id',$user->id)->count();
       
       ?>
      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fa fa-users tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Allocated Group</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$allocats}}</p>
                  <span><a  style="color:white; "href="{{route('show_group')}}">view details</a></span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
         
        
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="far fa-comment-alt tx-40 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Message</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$comments}}</p>
                  <span><a  style="color:white; "href="{{route('facultymessage')}}">view details</a></span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div> 
        </div><!-- row -->



      </div><!-- br-pagebody -->
     <!-- this is footer section  -->
     @include('faculty_DBD.includes.footer')
    </div>
  
    @endsection
  
    

