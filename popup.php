<?php 
    include('conn.php');
    $tablename = 'ADMINISTRATION';
    $id = $_POST['id'] or $_REQUEST['id'];
    $editQuery=mysqli_query($conn,"select * from $tablename where ADM_ID=$id");
    $editRow=mysqli_fetch_array($editQuery);
?>


<div class="greyOverlay"></div>
<div class="editPopup">
    <span class="closeIcon" onClick="closePopup(editPopup)"><img src="img/close.jpg" alt="close icon"></span>
    <form method="POST" action="edit.php">
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
            <td><?php echo $editRow['ADM_ID']; ?></td>
            <td><input type="text" name="editfirstname" value="<?php echo $editRow['ADM_FNAME'] ?>"></td>
            <td><input type="text" name="editlastname" value="<?php echo $editRow['ADM_LNAME']; ?>"></td>
            <td><input type="text" name="editdob" value="<?php echo $editRow['ADM_DOB']; ?>"></td>
            <td><input type="text" name="editposition" value="<?php echo $editRow['ADM_POSITION']; ?>"></td>
            <td><input type="text" name="editsalary" value="<?php echo $editRow['ADM_SALARY']; ?>"></td>
            <td><input type="text" name="editphone" value="<?php echo $editRow['ADM_PHONE']; ?>"></td>
            <td><input type="text" name="editemail" value="<?php echo $editRow['ADM_EMAIL']; ?>"></td>
            
            </tbody>
        </table>
        <input type="hidden" name="edittablename" value="<?php echo $tablename ?>">
        <input type="hidden" name="editid" value="<?php echo $editRow['ADM_ID']; ?>">
        <input type="submit" name="edit" value="EDIT">
    </form>
</div>



