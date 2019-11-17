<?php  
     require_once "connect.php";
	$sql = "DELETE FROM cars WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($conn, $sql))   {  
		echo 'Deleted data success !!';  
	}
?>