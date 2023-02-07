<?php
    include('conn.php');
    
    $firstname=$_POST['editfirstname'];
    $lastname=$_POST['editlastname'];
    $dob=$_POST['editdob'];
    $position=$_POST['editposition'];
    $salary=$_POST['editsalary'];
    $phone=$_POST['editphone'];
    $email=$_POST['editemail'];
    $tablename=$_POST['edittablename'];
    $editid=$_POST['editid'];
    
    
    
    mysqli_query($conn,"UPDATE $tablename SET ADM_FNAME = '$firstname', ADM_LNAME = '$lastname', ADM_DOB = '$dob', ADM_POSITION = '$position', ADM_SALARY = '$salary', ADM_PHONE = '$phone', ADM_EMAIL = '$email' where ADM_ID = $editid;");
    header('location:index.php');

?>