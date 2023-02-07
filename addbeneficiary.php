<?php
    include('conn.php');
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $fos=$_POST['fos'];
    $projectname=$_POST['projectname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $tablename=$_POST['tablename'];
    
    
    mysqli_query($conn,"insert into $tablename (BFC_ID, BFC_FNAME, BFC_LNAME, BFC_DOB, BFC_FOS, PROJECT_ID, BFC_PHONE, BFC_EMAIL) values ('', '$firstname','$lastname','$dob', '$fos', '$projectname', '$phone', '$email')");
    
    header('location:beneficaries.php');

?>