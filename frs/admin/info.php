<?php
	include("../connection.php");
	
		if(!empty($_POST['search'])){
			$sql="SELECT * FROM staff 
			WHERE staff_id ='".$_POST['search']."'
			|| file ='".$_POST['search2']."'";
			$query = $conn -> query($sql);
			$row = $query -> fetch_assoc();
		} else{
		$sql= "SELECT * FROM staff WHERE staff_id ";
		$query = $conn -> query($sql);
		$row = $query -> fetch_assoc();
		}
?>


<html>

	<body>
	
	
		<?php include("../navbar.php"); ?>
		<div align="center">
		
			<h1> File's Info </h1>
			
			<!-- Tag <hr> is use for creating straight line -->
			
			<hr><br>
			
			<form method="post" action ="info.php">
				<input type="text" name="search" placeholder="Enter staff ID">
				<input type="text" name="search2" placeholder="File">
				<input type="submit"  value="search">
			</form>
				
			
				<table border="1">
				
					<tr>
					
							<th> Staff Name </th>
							<th> Staff ID </th>
							<th> Section </th>
							<th> File </th>
							<th> Date Borrow </th>
							<th> Date Return </th>
							<th>Extension Number<th>
							<th>Phone Number</th>
							<th>Remark</th>
							
							
					</tr>

					<?php do { ?>
		<tr>
			<td><?php echo $row['staff_name']; ?></a></td>
			<td> <?php echo $row['staff_id']; ?></a></td>
			<td><?php echo $row['section']; ?></a></td>
			<td> <?php echo $row['file']; ?></a></td>
			<td><?php echo $row['dateborrow']; ?></a></td>
			<td><?php echo $row['datereturn']; ?></a></td>
			<td><?php echo $row['ex_num']; ?></a></td>
			<td><?php echo $row['phone_num']; ?></a></td>
			<td><?php echo $row['remark']; ?></a></td>
			<td><a href="editstaff.php?id=<?php echo $row['rec_id']; ?>">Edit</a>
				<a href = "deletestaff.php?id=<?php echo $row['staff_id']; ?>" onclick = "return check()">Delete</a></td>
		</tr>
		<?php } while($row = $query -> fetch_assoc()) ?>
		</table>

		<script>
            function check() {
                //function confirm() will produce an alert box which will return true or false
                var choice = confirm("Are you sure you want to remove this staff");
               
                if(choice == true) {
                    return true;
                } else { return false; }
            }
        </script>

</body>
</html>