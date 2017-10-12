<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$id=$_POST['id'];
	$ins=$_POST['date'];
	mysql_query("insert into holiday_details values($id,'$ins')");
	$_SESSION['auth']=1;
	$_SESSION['value']=1;
	header('Location: unauthorized_leave.php')
	
?>