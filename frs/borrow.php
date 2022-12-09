<?php include("connection.php"); //$conn ?>
<?php
    if(isset($_POST['id']))  {

        $name = $_POST['name'];
        $id = $_POST['id'];    
        $section = $_POST['section'];    
        $file = $_POST['file'];
        $dateborrow = date('Y-m-d', strtotime($_POST['dateborrow']));
        $datereturn = date('Y-m-d', strtotime($_POST['datereturn']));
        $exnum = $_POST['exnum'];
        $phonenum = $_POST['phonenum'];
        $remark = $_POST['remark'];

         //check for duplicate id
     $sqlid = "SELECT * FROM staff WHERE staff_id = '$id'";
     $queryid = $conn -> query($sqlid);
     $numid = $queryid -> num_rows;

     if($numid == 0) {
        $sql = "INSERT INTO staff (staff_name, staff_id, section, file, dateborrow, datereturn, ex_num, phone_num, remark) VALUES ('$name', '$id', '$section', '$file', '$dateborrow', '$datereturn', '$exnum', '$phonenum', '$remark')";
        if($conn -> query($sql) === true) {
            echo "<script>alert('Well Done !'); window.location='index.php?id=".$id."'</script>";
        } else {
            echo "<script>alert('Do it Again !');</script>";
        }
    } else { echo "<script>alert('This file have been borrowed!');</script>";
}
    }
?>

<html>
<head>

 <!-- Bootstrap CSS-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css&quot; integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
</head>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
        <div align="center">
            <div><h1>FILE BORROW FORM</h1></div>
           
            <form method="post" action="borrow.php" onsubmit="return validate()">
                <table cellpadding="10">
                    <tr><td>Name: </td><td>
       
                    <input type="text" name="name" class="form-control" required></td></tr>
                   
                    <tr><td>Staff ID: </td><td><input type="text" name="id" class="form-control" required></td></tr>
                    <tr><td>Section: </td><td><select name="section" class="form-control">
                        <option value="">Section</option>
                        <option value="MIS">MIS</option>
                        <option value="IMS">IMS</option>
                        <option value="BED">BED</option>
                    </select></td></tr>
                    <tr><td>File: </td><td><select name="file" class="form-control">
                        <option value="">File</option>
                        <option value="Delivery Order">Delivery Order</option>
                        <option value="B.O.S RECORD">B.O.S Record</option>
                        <option value="BDA STAFF MOVEMENT">BDA STAFF MOVEMENT</option>
                    </select></td></tr>
                    <tr><td>Date Of Borrow: </td><td><input type="date" name="dateborrow" class="form-control" required></td></tr>
                    <tr><td>Date Of Return: </td><td><input type="date" name="datereturn" class="form-control" required></td></tr>
                    <tr><td>Extension Number: </td><td><input type="text" name="exnum" class="form-control" required></td></tr>
                    <tr><td>Phone Number: </td><td><input type="text" name="phonenum" class="form-control" required></td></tr>
                    <tr><td>Remark </td><td><textarea name="remark" class="form-control"></textarea></td></tr>
                    <tr><td colspan="2" align="right"><input type="submit" class="btn btn-success btn-sm"></td></tr>
                </table>
            </form>
        </div>
       
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



    