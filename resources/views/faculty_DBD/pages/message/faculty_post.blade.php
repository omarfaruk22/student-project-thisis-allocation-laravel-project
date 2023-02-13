
@extends('faculty_DBD.master_template.template')

@section('content')
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
        {{ session()->get('message') }}
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
                  <td>Research Field</td>
                  <td>Description</td>
                  <td>Action</td>
                </tr>
              </thead>
              

              <tbody class="tbody">
              @php $sl=1 @endphp
                @foreach ($message as $data)
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
<div class="modal fade" id="message{{$data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="{{route('messagesent')}}" method="post">
        @csrf
        
        <input type="hidden" name="faculty_id" id="faculty_id" value="{{$test3->id}}">
        <input type="hidden" name="group_id" id="group_id" value="{{$data->group_id}}">
        <div class="form-group">
              <label for="post_des">Message</label> 
              <textarea type="text" name="post_des" id="post_des" placeholder="text a message" rows="3"class="form-control rounded-0" required></textarea>
             </div>


      
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-info" type="submit">send message</button>
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
              @foreach($facultyshow as $items)
            <hr>
        <p class="card-text"> {{$items->post_des}} </p>
       
        <span style="color:blue;"> Sent by: {{ $items->group_show->gname}} <i class="fa fa-calendar"> {{$items->created_at }}</i></span>
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
              @foreach($facultyshows as $item)
            <hr>
        <p class="card-text"> {{$item->comment_des}}</p>
       
        <span style="color:blue;"> Received from: {{ $item->group_shows->gname}} <i class="fa fa-calendar"> {{$item->created_at }}</i></span>
        <hr>
        @endforeach
        </div>
        
        
      <!-- Additional content here that will scroll -->
         </div>
             
              </div>
              
            </div>
          </div>
      </div>
      
      @include('faculty_DBD.includes.footer')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>






<!-- br-pagebody -->
@endsection