<?php
    include('conn.php');
    
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $position=$_POST['position'];
    $salary=$_POST['salary'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $tablename=$_POST['tablename'];
    
    
    mysqli_query($conn,"insert into $tablename (ADM_ID, ADM_FNAME, ADM_LNAME, ADM_DOB, ADM_POSITION, ADM_SALARY, ADM_PHONE, ADM_EMAIL) values ('', '$firstname','$lastname','$dob', '$position', '$salary', '$phone', '$email')");
    header('location:index.php');

?>