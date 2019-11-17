function update_data(id, text, column_name) {  
   $.ajax({
        url:"update.php",
        method:"POST",  
        data:{id:id, text:text, column_name:column_name},  
        dataType:"text",  
        success:function(data){  
            $('#msg').html("<div class='alert alert-success'>"+data+"</div>");
        }  
    });  
}

$(document).on('blur', '.name-result', function(){  
    var id = $(this).data("name");  
    var name = $(this).text();  
    if (name =='' || name.length < 5 || name.length > 40) {
        alert(" Please enter name must be lenght 5 to 40 characters") ? "" : location.reload();
    } else{
        update_data(id, name, "name");  
    };
});

$(document).on('blur', '.year-result', function(){  
    var id = $(this).data("year");  
    var yearEdit = $(this).text();  
    var year =  parseInt(yearEdit);
    if ( isNaN(year) == true || year =='' || year < 1990 || year > 2015) {
        alert(" Please enter year must be from 1990 to 2015 ") ? "" : location.reload();
    } else{
        update_data(id,year, "year");  
    };
   
});