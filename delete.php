<?php
		session_start();
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$id=$_POST['emp_id'];
		$email=$_POST['email'];
		echo $email;
		
		
		
		mysql_query("delete from emp_details where emp_id =$id");
		mysql_query("delete from completed_todolist where emp_id =$id");
		mysql_query("delete from holiday_details where emp_id =$id");
		mysql_query("delete from leave_request where emp_id =$id");
		mysql_query("delete from todolist where emp_id =$id");
		$r1=mysql_query("delete from login_details where username='$email'");
			if($r1)
			{
				$_SESSION['value']=1;
			}
			else
				$_SESSION['value']=2;
				
		header('Location: modify_emp.php');
					
?>