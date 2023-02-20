@extends('student_DBD.master_template.template')

@section('main')
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline tx-70 lh-0"></i>
        <div>
          <h4>Student Dashboard</h4>
          <!-- <p class="mg-b-0"></p> -->
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
<?php
use App\Models\Backend\Project;
$projectview=Project::with('fuculty_details')->orderby('id','asc')->paginate(5);


  ?>
      <div class="row">
          <div class="col-md-12">   
          	  <div class="msg"></div>
              <table class="table">
              <thead>
                <tr>
                  <td>#Sl</td>
                  <td>supervisor Name</td>
                  <td>Area of Interest</td>
                  <td>Description</td>
                </tr>
              </thead> 

              <tbody class="tbody">
             
                @foreach ($projectview as $key =>$data)
                  <tr>
                  <td>{{ $key + 1 }}</td>
                    <td>{{ $data->fuculty_details->fname }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->description }}</td>
                  </tr>
                 

                  
                @endforeach
              </tbody>
             

             </table> 
             {{$projectview->links()}}
            </div>
          </div> <!-- col-3 -->

        

      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left ">
          <div class="mg-b-2">Copyright &copy; 2023.student project allocation & management system.</div>
          <div>Attentively and carefully made.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    @endsection
  
    

