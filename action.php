<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$value=$_POST['value'];
		$id=$_POST['id'];
		$to=mysql_query("select * from completed_todolist where id=$id");
		if($to)
		{
			$row=mysql_fetch_array($to);
			$list=$row['list'];
		}
		if($value==1)
		{
			mysql_query("delete from completed_todolist where id=$id");	
			$_SESSION['value']=1;	
		}
		if($value==2)
		{
			$emp_id=$_POST['emp_id'];
			mysql_query("insert into todolist values($emp_id,'$list','PREVIOUS',$id)");
			mysql_query("delete from completed_todolist where id=$id");
			$_SESSION['value']=2;
		}
		header('Location: completed_requests.php');



?>