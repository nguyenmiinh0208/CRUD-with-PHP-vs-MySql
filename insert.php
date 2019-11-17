<?php
     require_once "connect.php";
     $sql = "INSERT INTO cars(id,name,year) VALUES('".$_POST["id"]."','".$_POST["name"]."', '".$_POST["year"]."')";
     $result = mysqli_query($conn, $sql);
     if ($result) {
          echo "Insert thanh cong";
     }
?>