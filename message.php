<?php
if(isset($_POST['submit']))
{
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	
	$message=$_POST['message'];
	$date=date("d-m-y");
	mysql_query("insert into message (message,date) values('$message','$date')");
	$_SESSION['value']=1;
	header('Location: message_.php');
}
else
header('Location: message_.php');
	
?>