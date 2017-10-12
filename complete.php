<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$id=$_POST['id'];
		$r=mysql_query("select * from todolist where id=$id");
		$row=mysql_fetch_array($r);
		$emp_id=$row['emp_id'];
		$list=$row['list'];
		$date=date("d-m-y");
		$id=$row['id'];
		mysql_query("insert into completed_todolist values($emp_id,'$list','$date',$id)");
		$r=mysql_query("delete from todolist where id=$id");
		$_SESSION['value']=1;
		header('Location: work.php');


?>