
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Payment details page</h4>
      <p class="mg-b-0">Payment Manage</p>
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
                  <td>Group Id</td>
                  <td>1st Transection</td>
                  <td>1st Transection Image</td>
                  <td>2nd Transection</td>
                  <td>2nd Transection Image</td>
                  <td>status</td>

                  <td>Action</td>
                </tr>
              </thead> 

              <tbody class="tbody">
              @php $sl=1 @endphp
                @foreach ($payshow as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->st_group_id }}</td>
                    <td>{{ $data->transection_one }}</td>
                    <td><img src="{{asset('backend/projectimage/'.$data->image_one)}}" width="100px" height="50px"></td>
                    <td>{{ $data->transection_two }}</td>
                    <td><img src="{{asset('backend/projectimage/'.$data->image_two)}}" width="100px" height="50px"></td>
                    <td>{{ $data->status }}</td>
                    <td>
                      <a href="{{ Route('payedit', $data->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-target='#delete{{ $data->id }}' data-toggle="modal"></i></button>
                    </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this Payment Details?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{  Route('paydelete', $data->id) }}" class="btn btn-danger">Confirm</a>
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