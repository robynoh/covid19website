<?php
session_start();
require_once('../classes/class.php');

 	$connect =new connection();
 	$connect->connectTodatabase();
	$selectquery="";
	
	
	$connect->selectDatabase();
	
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$lga=$_POST['lga'];
	$detail=$_POST['detail'];
	
	
	
	
		
		$query="INSERT INTO `report-case`(`report_id`,`name`,`phone` ,`address`,`lga`,`detail`,`time_of_post`)
		VALUES(NULL,'".$name."','".$phone."','".$address."','".$lga."','".$detail."','".date('d-m-Y')."')";
	$connect->insertion($query);
		
	
	
	
	header('location:../report-success?status=sucess&&pat='.$name);
	?>
	
