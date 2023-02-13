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
      <form method="POST" action="{{ route('group_id') }}">
            @csrf
            @if(session()->has('message'))
          <button style="color:green; font-size: 20px;">{{session('message')}} </button>
      
          @endif

            <div class="row">
              
              <div class="col-md-5">
              <div class="form-group">
              <label for="group_id">Enter Your Group Id</label> 
              <input type="text" name="id" id="id" placeholder="Enter Your Group Id" class="form-control" required >
             </div>
             <div class="form-group">
               <button class="form-control btn btn-info" >Next</button>
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
  
    

