<?php
    include('conn.php');
    
    $firstname=$_POST['editfirstname'];
    $lastname=$_POST['editlastname'];
    $dob=$_POST['editdob'];
    $fos=$_POST['editfos'];
    $projectname=$_POST['editprojectid'];
    $phone=$_POST['editphone'];
    $email=$_POST['editemail'];
    $tablename=$_POST['edittablename'];
    $editid=$_POST['editid'];
    
    
    
    mysqli_query($conn,"UPDATE $tablename SET BFC_FNAME = '$firstname', BFC_LNAME = '$lastname', BFC_DOB = '$dob', BFC_FOS = '$fos', PROJECT_ID = '$projectname', BFC_PHONE = '$phone', BFC_EMAIL = '$email' where BFC_ID = $editid;");
    header('location:beneficaries.php');

?>