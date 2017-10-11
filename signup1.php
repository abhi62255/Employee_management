<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
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
		$result=mysql_query("insert into emp_request(emp_name,age,designation,gender,email,contact,password,joining_date) values('$name',$age,'$designation','$gender','$email','$contact','$password','$date')");
		if($result)
		{
			echo"success";
		}	
		else
		echo"try again";
		
		
	}
	else
		echo"not sign up";
	
?>