@extends('student_DBD.master_template.template')

@section('main')
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline tx-70 lh-0"></i>
        <div>
          <h4>Student page</h4>
          <p class="mg-b-0">Student page</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody ">
      <div class="col-md-12">
       
      @if(session()->has('message'))
          <span style="color:green">{{session('message')}} </span>
      
          @endif
       
      <form method="POST" action="{{ route('pay_details_store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
              
              <div class="col-md-4">
              <div class="form-group">
              <label for="st_group_id">Enter Your Group Id</label> 
              <input type="text" name="st_group_id" id="st_group_id" placeholder="Enter Your Group Id" class="form-control" >
               </div>
              <div class="form-group">
              <label for="transection_one">1.payment transection Id</label> 
              <input type="text" name="transection_one" id="transection_one" placeholder="Enter payment transection Id" class="form-control" >
             </div>
             
             <div class="form-group">
              <label for="image_one">Enter Your Group Id</label> 
              <input type="file" name="image_one" id="image_one" placeholder="Payment Schreenshot" class="form-control" >
             </div>
            
              </div>
              <div class="col-md-4">
                <span style="color:blue">If your group has two member then use it</span>
              <div class="form-group">
              <label for="transection_two">2.payment transection Id</label> 
              <input type="text" name="transection_two" id="transection_two" placeholder="Enter payment transection Id" class="form-control" >
             </div>
             <div class="form-group">
              <label for="group_id">Enter Your Group Id</label> 
              <input type="file" name="image_two" id="image_two" placeholder="Payment Schreenshot" class="form-control" >
             </div>
             <div class="form-group">
               <button class="form-control btn btn-info" >submit</button>
             </div>
             </div>
             <div class="col-md-4">
                <div class=" pt-4 pl-5">
                <a href="{{route('stripe')}}" class="btn btn-success ">pay on card</a>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="payimg pt-1">
                      <img src="{{asset('backend/projectimage/pay.png')}}" alt="images">
                    </div>
                  </div>
                </div>
               
             </div>
                
              
             
            </div>
                            
          
        </form>
        
        </div>
        

      


      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    @endsection
  
    

