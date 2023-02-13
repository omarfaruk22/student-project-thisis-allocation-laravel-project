

jQuery(document).ready(function(){

    jQuery(document).on('click', '.editGroup',function(e){
        e.preventDefault();

        var gId=jQuery(this).val();
        $.ajax({
            url:'gedit/'+gId,
            type:'GET',
            dataType:'json',
            success:function(result){
                jQuery("#gname").val(result.data.gname);
                
            }
        });
    });


    showData();
    function showData(){
        $.ajax({
            url:'gshow',
            type:'GET',
            datatype:'json',
            success:function(result){
                var sl=1;
                jQuery(".tbody").html('');
                $.each(result.data, function(key, item){
                    jQuery(".tbody").append('<tr>\
                    <td>'+sl+'</td>\
                    <td>'+item.gname+'</td>\
                    <td>\
                      <button data-target="#editGroup" data-toggle="modal" class="btn btn-sm btn-info editGroup" value="'+item.id+'" ><i class="fa fa-edit"></i></button>\
                      <button  value="'+item.id+'" >Delete</button>\
                    </td>\
                  </tr>');
                  sl++;
                });
            }
        });
    }

    jQuery(".addGroup").click(function(){
     
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var gname=jQuery(".gname").val();
       

        $.ajax({
            url:'ginsert',
            type:'POST',
            dataType:'json',
            data:{
                'gname':gname
                
            },
            success: function(result){
                if(result.success == 'faild'){
                    jQuery(".gnameError").text(result.errors.gname);
                 
                }
                else{
                    showData();
                    jQuery(".msg").append('<div class="alert alert-success">'+result.msg+'</div>');
                    jQuery("#addGroup").modal('hide');
                    jQuery("#addGroup").find('input').val('');
                    jQuery("#addGroup").find('textarea').val('');
                    jQuery(".msg").fadeOut(5000);
                    
                }
            }
        });
    });


});