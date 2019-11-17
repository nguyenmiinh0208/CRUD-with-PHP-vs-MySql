function insert_data(){
    $.ajax({  
        url:"insert.php",  
        method:"POST",  
        data:{id:id,name:name, year:year},  
        dataType:"text",  
        success:function(data) {  
            if(data == ''){
            alert("Nhap lai ID") ? "" : location.reload();
            } else{
            $('#msg').html("<div class='alert alert-success'>"+data+"</div>");
            }
        }  
    }) 
}

$(document).on('click', '#btn_insert', function(){
    id = $('#id_insert').text();
    id = parseInt(id);
    if (isNaN(id) === true) {
        alert("ID phai la so nguyen");
        return false;
    }

    //validate name
    name = $('#name_insert').text();
    if ( name.length < 5 || name.length > 40) {
        alert("Do dai chuoi chi tu 5 den 40 ki tu") ;
        return false;
    }

    //validate year
    year = $('#year_insert').text();
    year =  parseInt(year); 
    if ( isNaN(year) == true || year < 1990 || year > 2015) {
        alert("Gia tri nam trong khoang 1990 - 2015");
        return false;
    } 
    insert_data();
});