@extends('backend.master_template.template')

@section('content')

    <!-- ########## START: MAIN PANEL ########## -->
      <!-- this the main section  -->
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Admin Dashboard</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fa fa-users  tx-40 lh-0 tx-white op-5"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Allocated Group</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$allocat}}</p>
                  <span><a  style="color:white; "href="{{route('allocatshowadmin')}}">view details</a></span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fa fa-user tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Faculty</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$faculty}}</p>
                  <span><a  style="color:white; "href="{{route('fymanage')}}">view details</a></span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fa fa-book tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">Total Area</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$field}}</p>
                  <span><a  style="color:white; "href="{{route('pmanage')}}">view details</a></span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="fab fa-paypal tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">PENDING PAYMENT </p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">{{$pay}}</p>
                  <span><a  style="color:white; "href="{{Route('managepay')}}">view details</a></span>
                </div>
               
              </div>
              
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          
          
        </div><!-- row -->

       

      </div><!-- br-pagebody -->
     <!-- this is footer section  -->
     @include('backend.includes.footer')
    </div>

    @endsection
  
    

