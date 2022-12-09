<?php include("../connection.php"); //$conn ?>
<?php
    $id = $_GET['id'];

    $sql = "SELECT * FROM staff WHERE rec_id = '$id'";
    $query = $conn -> query($sql);
    $row = $query -> fetch_assoc();
?>

<html>
    <body>
       
       
        <div align="center">
            <h1>Edit Staff</h1>
           
            <form method="post" action="updatestaff.php">
            <table>
            <tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $row['staff_name']; ?>"></td></tr>
            <tr><td>Staff ID: </td><td><input type="text" name="id" value="<?php echo $row['staff_id']; ?>"></td></tr>
            <tr><td>Section: </td><td><select name="section" class="form-control">
                <option value="MIS"<?= ($row["section"] == "MIS")? "selected" : "" ?> >MIS</option> 
                <option value="IMS"<?= ($row["section"] == "IMS")? "selected" : "" ?> >IMS</option> 
                <option value="BED"<?= ($row["section"] == "BED")? "selected" : "" ?> >BED</option> 
             </select></td></tr>
             <tr><td>File: </td><td><select name="file" class="form-control">
                <option value="Delivery Order"<?= ($row["file"] == "Delivery Order")? "selected" : "" ?> >Delivery Order</option> 
                <option value="B.O.S RECORD"<?= ($row["file"] == "B.O.S RECORD")? "selected" : "" ?> >B.O.S RECORD</option> 
                <option value="BDA STAFF MOVEMENT"<?= ($row["file"] == "BDA STAFF MOVEMENT")? "selected" : "" ?> >BDA STAFF MOVEMENT</option>
            </select></td></tr>
            <tr><td>Date Of Borrow: </td><td><input type="date" name="dateborrow" value="<?php echo $row['dateborrow']; ?>"></td></tr>
            <tr><td>Date Of Return: </td><td><input type="date" name="datereturn" value="<?php echo $row['datereturn']; ?>"></td></tr>
            <tr><td>Extension Number: </td><td><input type="text" name="exnum" value="<?php echo $row['ex_num']; ?>"></td></tr>
            <tr><td>Phone Number: </td><td><input type="text" name="phonenum" value="<?php echo $row['phone_num']; ?>"></td></tr>
            <tr><td>Remark </td><td><textarea name="remark" value="<?php echo $row['remark']; ?>"></textarea></td></tr>
            <tr><td colspan="2" align="right"><input type="submit" class="btn btn-success btn-sm"></td></tr>
            <input type="hidden" name="rec_id" value="<?php echo $id; ?>">
            </table>
            </form>
        </div>
    </body>
</html>