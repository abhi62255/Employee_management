<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$id=$_POST['id'];
	echo $id;
	mysql_query("delete from message where id=$id");
	header('Location: message_.php');
?>