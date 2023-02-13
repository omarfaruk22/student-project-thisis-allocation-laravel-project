jQuery(document).ready(function(){
         
    jQuery(".add_groupdetail").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        

         var group_id=jQuery(".group_id").val();
         var student_id=jQuery(".student_id").val();
        //  console.log(group_id+student_id);
        
         $.ajax({
            url:"{{route('dinsert')}}",
            type:'post',
            dataType:'json',
            data:{
                group_id:group_id,
                student_id:student_id

            },
            success: function(result){
                if(result.success ){
                    
                    jQuery(".msg").append('<div class="alert alert-success">'+result.msg+'</div>');
                    jQuery("#addGroup").modal('hide');
                    jQuery("#addGroup").find('input').val('');
                    jQuery("#addGroup").find('textarea').val('');
                    jQuery(".msg").fadeOut(5000);
                    
                }
                else{
                    jQuery(".group_idError").text(result.errors.group_id);
                    jQuery(".student_idError").text(result.errors.student_id);
                    // showData();
                    
                }
            }

         });
    })




});