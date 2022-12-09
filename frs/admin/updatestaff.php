<?php include("../connection.php"); //$conn ?>
<?php
	$rec_id = $_POST['rec_id'];
	$name = $_POST['name'];
	$id = $_POST['id'];
	$section = $_POST['section'];    
    $file = $_POST['file'];
    $dateborrow = date('Y-m-d', strtotime($_POST['dateborrow']));
    $datereturn = date('Y-m-d', strtotime($_POST['datereturn']));  
    $exnum = $_POST['exnum'];
    $phonenum = $_POST['phonenum'];
    $remark = $_POST['remark'];        
	
	$sql = ("UPDATE staff SET staff_name = '".$name."', staff_id = '$id',
	section = '".$section."', file = '$file', dateborrow = '".$dateborrow."', datereturn = '".$datereturn."', ex_num = '".$exnum."', phone_num = '".$phonenum."', remark = '".$remark."'
	WHERE rec_id = '$rec_id'");
	if($conn -> query($sql) === true){
		echo "<script>alert('Your data has successfully updated!');
		window.location = 'info.php?id=".$id."';</script>";
	} else {
		echo "<script>alert('Failed to update your data. Please try again!');
		window.location = 'info.php';</script>";
	}
	
?>