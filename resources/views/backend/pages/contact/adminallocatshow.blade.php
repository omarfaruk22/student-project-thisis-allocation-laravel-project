
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Admin page</h4>
      <p class="mg-b-0">Allocated Student Group</p>
    </div>
   </div>

      <div class="br-pagebody">
        <div class="row">
          <div class="col-md-12">   
          	  <div class="msg"></div>
              <table class="table">
              <thead>
                <tr>
                  <td>#Sl</td>
                  <td>Group Name</td>
                  <td>Faculty Name</td>
                  <td>Area of Interest</td>
                  <td>Description</td>
                  <td>Status</td>
                  <td>Action</td>
                </tr>
              </thead> 

              <tbody class="tbody">
              @php $sl=1 @endphp
                @foreach ($adminshow as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->group_info->gname }}</td>
                    <td>{{ $data->faculty_info->fname }}</td>
                    <td>{{ $data->project_info->title }}</td>
                    <td>{{ $data->project_info->description }}</td>
                    <td>
                      @if ($data->status==0)
                      <span class="badge badge-sm btn-info">Pending</span>
                      @elseif(($data->status==1))
                      <span class="badge badge-danger">Rejected</span>
                      @elseif(($data->status==2))
                      <span class="badge badge-success">Approved</span>
                      @else
                      <span class="badge badge-info">Panding</span>
                      @endif
                    </td>
                    <td>
                      <!-- <a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a> -->
                      <a href="{{route('editallocat',$data->id )}}"  class="btn btn-sm btn-info"><i class="fa fa-edit" ></i></a>
                    </td>
                    <td>
                      <!-- <a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a> -->
                      <button class="btn btn-sm btn-dark"><i class="fas fa-eye" data-target='#delete{{ $data->id }}' data-toggle="modal"></i></button>
                    </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Views</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            @foreach($data->allocations as $item)
                <div class="col-md-6">
                <div class="card " style="width: 14rem; background-color:#e6ffff" >
         <!-- <img class="card-img-top" src="path/to/image.jpg" alt="Card image cap"> -->
        <div class="card-body">
        <h5 class="card-title">Stusent Id: {{ $item->student_id }}</h5>
        <h6> Name: {{ $item->name }}</h6>
         <p class="card-text">Email: {{ $item->email }}</p>
         <span>Phone: {{ $item->phone }}</span>
         <p class="card-text">CGPA: {{ $item->cgpa }}</p>
     </div>
      </div>
                </div> 
                @endforeach 

                <div class="row py-3">
                    
                    <div class="col-md-1"></div>
                    <div class="col-md-3 ">Semister:{{$data->semister}}</div>
                    <div class="col-md-2">year:{{$data->year}}</div>
                    <div class="col-md-3">program:{{$data->program}}</div>
                    <div class="col-md-3 ">phase:{{$data->phase}}</div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12 ml-4">Area of Interest: {{ $data->project_info->title }}</div>
                </div>
                <div class="row">
                    <div class="col-md-12 ml-4"> Description: {{ $data->project_info->description }}</div>
                </div>
                    
                    
                  
                    
                
        </div>
     

      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
                   @php $sl++ @endphp
                @endforeach
              </tbody>

             </table> 
            </div>
          </div> <!-- col-3 -->
      </div>
      
</div>
<!-- br-pagebody -->
@endsection