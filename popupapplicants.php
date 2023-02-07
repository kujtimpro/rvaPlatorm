<?php 
    include('conn.php');
    $tablename = 'BENEFICARY';
    $id = $_POST['id'] or $_REQUEST['id'];
    $editQuery=mysqli_query($conn,"select * from $tablename where BFC_ID=$id");
    $editRow=mysqli_fetch_array($editQuery);
?>


<div class="greyOverlay"></div>
<div class="editPopup">
    <span class="closeIcon" onClick="closePopup(editPopup)"><img src="img/close.jpg" alt="close icon"></span>
    <form method="POST" action="editbeneficiary.php">
        <table class="styled-table" id="popuptable">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of birth</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Phone</th>
                <th>Email</th>
                </tr>
            </thead>
            <tbody class="innerEdit">
            <td><?php echo $editRow['BFC_ID']; ?></td>
            <td><input type="text" name="editfirstname" value="<?php echo $editRow['BFC_FNAME'] ?>"></td>
            <td><input type="text" name="editlastname" value="<?php echo $editRow['BFC_LNAME']; ?>"></td>
            <td><input type="text" name="editdob" value="<?php echo $editRow['BFC_DOB']; ?>"></td>
            <td><input type="text" name="editfos" value="<?php echo $editRow['BFC_FOS']; ?>"></td>
            <td><input type="text" name="editprojectid" value="<?php echo $editRow['PROJECT_ID']; ?>"></td>
            <td><input type="text" name="editphone" value="<?php echo $editRow['BFC_PHONE']; ?>"></td>
            <td><input type="text" name="editemail" value="<?php echo $editRow['BFC_EMAIL']; ?>"></td>
            
            </tbody>
        </table>
        <input type="hidden" name="edittablename" value="<?php echo $tablename ?>">
        <input type="hidden" name="editid" value="<?php echo $editRow['BFC_ID']; ?>">
        <input type="submit" name="edit" value="EDIT">
    </form>
</div>



