
@extends('backend.master_template.template')

@section('content')
<div class="br-mainpanel">
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Student page</h4>
      <p class="mg-b-0">Student Registered</p>
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
                  <td>Student Name</td>
                  <td>Email</td>
                  <!-- <td>Password</td>  -->
                  <td>phone/User type</td> 
                  
                  
                </tr>
              </thead> 

              <tbody class="tbody">
              @php $sl=1 @endphp
                @foreach ($students as $data)
                  <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <!-- <td>{{ $data->password }}</td> -->
                    <td>
                    {{ $data->phone }}
                    </td>
                  
                    
                  
                    
                  </tr>
                  

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