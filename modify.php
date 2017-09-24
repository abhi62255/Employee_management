<?php
		session_start();
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$_SESSION['id']=$_POST['emp_id'];
		$id=$_POST['emp_id'];
		header('Location: modify1.php');

?>