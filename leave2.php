<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	if(isset($_POST['submit']))
	{
		$date=$_POST['date'];
		$date2=$_POST['date2'];
		$reason=$_POST['reason'];
		$email=$_SESSION['username'];
		$r=mysql_query("select * from emp_details where email='$email'");
		$row=mysql_fetch_array($r);
		$id=$row['emp_id'];
		$name=$row['emp_name'];
		$s=mysql_query("insert into leave_request values($id,'$name','$date','$date2','$reason','----')");
		if($s)
		{
			$_SESSION['value']=1;
			header('Location: leave.php');
		}
	}


?>