<?php
session_start();
require_once('../classes/class.php');

 	$connect =new connection();
 	$connect->connectTodatabase();
	$selectquery="";
	
	
	
	$connect->selectDatabase();
	
	$country=$_POST['country'];
	$contact=$_POST['contact'];
	$breathing=$_POST['breathing'];
	$fever=$_POST['fever'];
	$cough=$_POST['cough'];
	$muscle=$_POST['muscle'];
	$vomiting=$_POST['vomiting'];
	
	$testscore=$country+$contact+$breathing+$fever+$cough+$muscle+$vomiting;
	
	header('location:../success_info?status=sucess&&scr='.$connect->encrypt_decrypt($testscore,true).'&&nm='.$connect->encrypt_decrypt($_POST['name'],true).'&&pn='.$connect->encrypt_decrypt($_POST['phone'],true).'&&ad='.$connect->encrypt_decrypt($_POST['address'],true).'&&lg='.$connect->encrypt_decrypt($_POST['lga'],true));
	?>
	
