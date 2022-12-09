<?php include("../connection.php"); //$conn ?>
<?php
	$id = $_GET['id'];
	
	$sql = "DELETE FROM staff 
     WHERE staff_id = '$id'";
	$conn -> query($sql);
	
	header("Location: info.php");

?>