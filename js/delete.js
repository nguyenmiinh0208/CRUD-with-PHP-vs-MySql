$(document).on('click', '.btn_delete', function(){  
     var id=$(this).data("id");  
     if(confirm("Ban chac chan xoa chu ??")) {  
         $.ajax({  
             url:"delete.php",  
             method:"POST",  
             data:{id:id},  
             dataType:"text",  
             success:function(data){  
               alert(data) ? "" : location.reload();  
             }  
         });
     }  
 });