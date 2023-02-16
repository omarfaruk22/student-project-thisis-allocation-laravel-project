@extends('student_DBD.master_template.template')

@section('main')

<div class="br-mainpanel">

      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline tx-70 lh-0"></i>
        <div>
          <h4>Project And Thesis Proposal Page</h4>
          <p class="mg-b-0">Student page</p>
       
         
        
        </div>
       
      </div><!-- d-flex -->
      <div class="row">
        <div class="col-md-12 pt-2 pr-5 mr-5 "> <a href="{{route('allocation_show', $group_id->id)}}" class="btn btn-info btn-sm float-right " >Your allocated Research Field here</a></div>
      </div>
     
      <div class="br-pagebody">
      <!-- <div class="col-md-12"> -->
      <form action="{{route('allocation_store')}}" method="post">
          @csrf
         
          <input type="hidden" name="group_id" id="group_id" placeholder="group_id" class="form-control" value="{{$group_id->id}}" required>

          <div class="first bg-light px-3">
          <div class="row ">
            <div class="col-md-3 pt-3">
            <div class="form-group">
              <label for="semister">Semister</label>
              <select name="semister" id="semister" required>
                <option value="">--Select Semister--</option>
                <option value="spring">Spring</option>
                <option value="summer">Summer</option>
              </select>
           
             </div>
            </div>
            <div class="col-md-3 pt-3">
            <div class="form-group">
              <label for="year">Year</label>
              <select name="year" id="year" required >
                <option value="">--Select Year--</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            
            
              </select>
              
             </div>

            </div>
            <div class="col-md-3 pt-3">
            <div class="form-group">
              <label for="program">Program</label>
              <select name="program" id="program" required >
                <option value="">--Select Program--</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="CEN">CEN</option>
              </select>
          
             </div>
            </div>
            <div class="col-md-3 pt-3">
            <div class="form-group">
            <label for="phase">Phase</label>
              <select name="phase" id="phase" required>
                <option value="">--Select Phase--</option>
                <option value="project">Project</option>
                <option value="thesis">Thesis</option>
              </select>
              
             </div>
            </div>

          </div>
          </div>
          <div class="row bg-transparent pt-3"></div>

          @foreach($group_id->group_details as $key=>$data) 
            <div class="2nd bg-light px-3 py-2">
             <div class="row ">
         
              <div class="col-md-2 ">   
               <div class="form-group">
              <label for="s_id">Student Id</label> 
             
              <input type="text" name="s_ids[]" id="s_id{{$key}}" placeholder="Student_id" class="form-control" value="{{optional($data)->student_id}}">
      
             </div>
             </div> 
             <div class="col-md-3 "> 
             <div class="form-group">
              <label for="name">Name</label> 
              <input type="text" name="name[]" id="name{{$key}}" placeholder="Enter Your Name" class="form-control" value="" required>
              <span class="text-danger">
                @error('name')
                  {{ $message }}
                @enderror
              </span>
             </div>
             </div>
             <div class="col-md-3 "> 
             <div class="form-group">
              <label for="email"> Email</label> 
              <input type="email" name="email[]" id="name{{$key}}" placeholder="Enter Your Email" class="form-control" value="" required>
             
             </div>
             </div>
             <div class="col-md-2 "> 
             <div class="form-group">
              <label for="name"> Phone</label> 
              <input type="text" name="phone[]" id="phone{{$key}}" placeholder="Enter Your No." class="form-control" value="" required>
              <span class="text-danger">
                @error('phone')
                  {{ $message }}
                @enderror
              </span>
             </div>
             </div>
             <div class="col-md-2 "> 
             <div class="form-group">
              <label for="cgpa">CGPA</label> 
              <input type="text" name="cgpa[]" id="cgpa{{$key}}" placeholder="Enter Your CGPA" class="form-control" value="" required>
              <span class="text-danger">
                @error('cgpa')
                  {{ $message }}
                @enderror
              </span>
             </div>
             </div>
           
            
            
             
           </div>
           
           </div>

           @endforeach 

           <div class="row">
            <div class="col-md-12 py-3">
              <h3>Select Your Supervisor</h3>
            </div>
           </div>
         <div class="bg-light  py-3 px-3">
          <div class="row">
             <div class="col-sm-6">
              <div class="form-group">
               <label for="supervisor">Supervisor</label>
                  <select name="supervisor" id="supervisor" class="form-control" required>
                <option value="">--Select Supervisor--</option>
              
                @foreach($project as $data)
                <option value="{{$data->id}}">{{$data->fname}}</option>
                @endforeach
                
              </select>
             </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
            <label for="project">Project/Thisis</label>
              <select name="project" id="project" class="form-control" required>
                <option value="">--Select Project/Thisis--</option>
           
              </select>
             </div>
          </div>
          <div class="col-md-12 "> 
             <div class="form-group">
              <label for="name">Description</label> 
              <input type="text" name="description" id="description" placeholder="Description" class="form-control" value="">
              
             </div>
             </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-3"> 
             <div class="form-group">
              <label for="date">submission Date</label> 
              <input type="date" name="date" id="date" placeholder="submission Date" class="form-control" value="" required>
              <span class="text-danger">
                @error('date')
                  {{ $message }}
                @enderror
              </span>
             </div>
             </div>
        </div>
         <!-- <div class="row">
           <div class="col-sm-6">
             <div class="form-group">
               <label for="description">Product Description</label>
               <textarea name="description" id="description" placeholder="Enter Product Description" class="form-control">{{ old('description') }}</textarea>

              <span class="text-danger">
                @error('description')
                  {{ $message }}
                @enderror
              </span>
             </div>
             

             <div class="form-group">
              <label for="category">Product Category</label>
              <select name="category" id="category" class="form-control">
                <option value="">-----Select Category-----</option>
                <option value="Man" @if (old('category') == 'Man') selected @endif>Man</option>
                <option value="Woman" @if (old('category') == 'Woman') selected @endif>Woman</option>
                <option value="Children" @if (old('category') == 'Children') selected @endif>Children</option>
              </select>
             </div>

             <div class="form-group">
              <label for="size">Product Size</label> <select name="size" id="size" class="form-control">
                <option value="">-----Select Size-----</option>
                <option value="xl">xl</option>
                <option value="m">m</option>
                <option value="sm">sm</option>
              </select>

             </div>

            </div>
            <div class="col-sm-6">

             <div class="form-group">
              <label for="costPrice">Cost Price</label> <input type="text" name="costPrice" id="costPrice" placeholder="Enter Product Cost Price" class="form-control">
              <span class="text-danger">
                @error('costPrice')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="salePrice">Sale Price</label> <input type="text" name="salePrice" id="salePrice" placeholder="Enter Product Sale Price" class="form-control">
              <span class="text-danger">
                @error('salePrice')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="quantity">Quantity</label> <input type="text" name="quantity" id="quantity" placeholder="Enter Product Quantity" class="form-control">
              <span class="text-danger">
                @error('quantity')
                  {{ $message }}
                @enderror
              </span>
             </div>

             <div class="form-group">
              <label for="status">Product Status</label>
              <select name="status" id="status" class="form-control">
                <option value="">-----Select Status-----</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
              </select>
             </div>

             <div class="form-group">
               <button class="form-control btn btn-info" >Add Product</button>
             </div>
             </div>
            
          </div>col-3 -->
          <div class="form-group">
               <button class="form-control btn btn-info" >Submit</button>
             </div>
        </form>
        
        

      


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  

    <script>
$(document).ready(function(){

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $('#supervisor').on('change',function(){
  var faculty_id = $(this).val();
  if(faculty_id)
  {
    
   $.ajax({
    
    url:"{{Route('supervisor')}}/"+faculty_id,
    type:'get',
    dataType:'json',
   
    success:function(data){
     
      
      $('#project').empty();
      $('#project').html('<option value="">--Select Project/Thisis--</option>');
      $.each(data,function(key,value){
        $('#project').append('<option value="'+value.id+'">'+value.title+'</option>');
        


      });

    },
   });
  }else{
    alert("danger");
  }

 });
 // 2nd   
 $('#project').on('change',function(){
  var p_id = $(this).val();
  
   $.ajax({
    
    url:"{{Route('description')}}/"+p_id,
    type:'get',
    dataType:'json',
   
    success:function(data){
     
      
      $('#description').empty();
      $.each(data,function(key,value){
        $('#description').val(data.description);
        


      });

    },
   });
  

 }); 

//end 

});
</script>

<!-- <script type="text/javascript">$
$(document).ready(function () {
$('#supervisor').on('change',function(e) {
var faculty_id = $(this).val();
console.log(faculty_id);
if (faculty_id){
 
  $.ajax({
url:"{{ route('supervisor') }}/"+faculty_id,
type:"get",
dataType:"json",
success:function (data) {
$('#project').empty();
$.each(data.projects[0].projects,function(store,supervisor){
$('#project').append('<option value="'+project.id+'">'+project.title+'</option>');
})
}
})


}
)};
)};
</script> -->
 @endsection