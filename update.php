<?php  
    require_once "connect.php";
	$sql = "UPDATE cars SET ".$_POST["column_name"]."='".$_POST["text"]."' WHERE id='".$_POST["id"]."'";
	if(mysqli_query($conn, $sql))   {  
		echo 'Updated data success !!';
	}
?>