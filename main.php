<!DOCTYPE html>
<html lang=en>
<head>
     <title>LAB 7</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
     <h1 style="margin:50px 0px 50px 600px; padding: auto;">LAB 7</h1>
     <div class="container">
          <table class="table">
               <div id="msg"></div>
               <div id="data"></div>
          </table>
     </div>
</body>
</html>
<script>
$(document).ready(function(){
     function getData() {
          $.ajax({
               url: "select.php",
               method:"POST",
               success:function(data) {
                    $("#data").html(data);
               }
          });
     }
     getData();
});
</script>
<script src="js/insert.js"></script>
<script src="js/update.js"></script>
<script src="js/delete.js"></script>