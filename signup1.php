<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	session_start();
	if(isset($_POST['submit']))
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$name=$_POST['emp_name'];
		$age=$_POST['emp_age'];
		$designation=$_POST['emp_designation'];
		$gender=$_POST['emp_gender'];
		$email=$_POST['emp_email'];
		$contact=$_POST['emp_contact'];
		$password=$_POST['emp_password'];
		$date="20".date('y-m-d');
		$r=mysql_query("select * from emp_details where email='$email' or contact='$contact'");
		if($r)
		echo "good";
		if(mysql_num_rows($r)==0)
		{
			$result=mysql_query("insert into emp_request(emp_name,age,designation,gender,email,contact,password,joining_date) values('$name',$age,'$designation','$gender','$email','$contact','$password','$date')");
			if($result)
			{
				$_SESSION['value']=1;
			}	
			else
			{
				$_SESSION['value']=2;
			}
		}
		else
		{
			$_SESSION['value']=2;
		}
		
	}
	header('Location: login.php');
	
?>