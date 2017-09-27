<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$value=$_POST['value'];
	$id=$_POST['emp_id'];
	echo $value;
	if($value==1)
	{
		$r=mysql_query("update leave_request set status='Accepted' where emp_id=$id && status='----'");
		if($r)
		echo"grant";
	}
	if($value==2)
	{
		$r1=mysql_query("update leave_request set status='Rejected' where emp_id=$id && status='----'");
		if($r1)
		echo"grant decline";
	}
	
	
?>