
@extends('student_DBD.master_template.template')

@section('main')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="fas fa-envelope fa-3x"></i>
    <div>
      <h4>Contract page</h4>
      <p class="mg-b-0">Communication</p>
    </div>
</div>
@if (session()->has('message'))
    <div class="alert alert-success">
        {{session()->get('message') }}
    </div>
@endif
      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">   
          	  <div class="msg"></div>
              <table class="table">
              <thead>
                <tr>
                <td>#Sl</td>
                  <td>Group Name</td>
                  <td>Area of Interest</td>
                  <td>Description</td>
                  <td>Action</td>
                </tr>
              </thead> 

              <tbody class="tbody">
              @php $sl=1 @endphp
                @foreach ($message1 as $data)
                  <tr>
                  <td>{{ $sl }}</td>
                    <td>{{ $data->group_info->gname }}</td>
                    <td>{{ $data->project_info->title }}</td>
                    <td>{{ $data->project_info->description }}</td>
                  
                    <td>
                      <!-- <a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a> -->
                      <button class="btn btn-sm btn-dark"><i class="far fa-envelope fa-1x" data-target='#message{{ $data->id }}' data-toggle="modal"></i></button>
                    </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="message{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="insertform" method="post">
        @csrf
        
        <input type="hidden" name="group_id" id="group_id" value="{{$data->group_id}}">
        <input type="hidden" name="faculty_id" id="faculty_id" value="{{$data->supervisor}}">
        <div class="form-group">
              <label for="comment_des">Message</label> 
              <textarea type="text" name="comment_des" id="comment_des" placeholder="text a message" rows="3"class="form-control rounded-0" required></textarea>
             </div>


      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-info" type="submit" id="submit">send message</button>
      </div>
      </form>
    </div>
  </div>
</div>
                   @php $sl++ @endphp
                @endforeach
              </tbody>

             </table> 
            </div>
          </div> <!-- col-3 -->
         
          <hr>
          <div class="row">
            <div class="col-md-5">
            <div class="card" >
               <h3 style="color:blue;background-color:#d1d1e0;" class="card-title text-center py-3 my-0">Send Message</h3>
            <div class="card-body" style="overflow:auto; height:200px;">
            <div class="message">
              @foreach($studentshows as $data)
            <hr>
        <p class="card-text"> {{$data->comment_des}}</p>
       
        <span style="color:blue;"> Sent by: {{$data->faculty_shows->fname}} <i class="fa fa-calendar"> {{$data->created_at }}</i></span>
        <hr>
        @endforeach
        </div>
      <!-- Additional content here that will scroll -->
         </div>
             
              </div>
  
            
              
            </div>
            <div class="col-md-5">
            <div class="card">
               <h3 style="color:blue;background-color:#d1d1e0" class="card-title text-center py-3 my-0">Received Message</h3>
            <div class="card-body" style="overflow:auto; height:200px;">
            <div class="message">
            @foreach($studentshow as $item)
            <hr>
        <p class="card-text"> {{$item->post_des}}</p>
       
        <span style="color:blue;"> Received from: {{$item->faculty_show->fname}} <i class="fa fa-calendar"> {{$item->created_at }}</i></span>
        <hr>
        @endforeach
        </div>
        
        
      <!-- Additional content here that will scroll -->
         </div>
             
              </div>
              
            </div>
          </div>
      </div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function () {
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('#insertform').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "{{route('student_comment')}}",
            data: $('#insertform').serialize(),
            success: function (response) {
                console.log(response)
                $('.modal').each(function(){
                    $(this).modal('hide');
                });
                alert("successfully sent message");
            },
            error: function(error) {
                console.log(error)
                alert("message not sent");
            }
        });
    });
});
</script>
@endsection