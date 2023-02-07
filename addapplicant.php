<?php
    include('conn.php');
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $fos=$_POST['fos'];
    $status=$_POST['status'];
    $applieddate=$_POST['applieddate'];
    $projectname=$_POST['projectname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $tablename=$_POST['tablename'];
    
    
    mysqli_query($conn,"insert into APPLICANTS (APP_ID, APP_LNAME, APP_FNAME, APP_DOB, APP_FOS, APP_STATUS, APP_APPLIEDTDATE, PROJECT_ID, APP_EMAIL, APP_PHONE) values ('', '$lastname', '$firstname', '$dob', '$fos', '$status', '$applieddate', '$projectname', '$email', '$phone')");
    
    header('location:applicants.php');

?>