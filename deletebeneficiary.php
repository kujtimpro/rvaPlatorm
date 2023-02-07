<?php
	$id = $_POST['id'] or $_REQUEST['id'];
	include('conn.php');
	mysqli_query($conn,"delete from BENEFICARY where BFC_ID='$id'");
	header('location:beneficaries.php');
?>