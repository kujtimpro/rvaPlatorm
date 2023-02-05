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
    <table class="styled-table" id="popuptable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Date of birth</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Phone</th>
            <th>Email</th>
            </tr>
        </thead>
        <tbody class="innerEdit">
        <td><?php echo $editRow['ADM_ID']; ?></td>
        <td><?php echo $editRow['ADM_FNAME'] . " " . $row['ADM_LNAME']; ?></td>
        <td><?php echo $editRow['ADM_DOB']; ?></td>
        <td><?php echo $editRow['ADM_POSITION']; ?></td>
        <td><?php echo $editRow['ADM_SALARY']; ?></td>
        <td><?php echo $editRow['ADM_PHONE']; ?></td>
        <td><?php echo $editRow['ADM_EMAIL']; ?></td>
        </tbody>
    </table>
</div>



