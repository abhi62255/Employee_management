<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$name=$_POST['emp_name'];
		$age=$_POST['age'];
		$id=$_POST['emp_id'];
		$designation=$_POST['designation'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$password=$_POST['password'];
		
		$r=mysql_query("INSERT INTO emp_details(emp_name,age,designation,gender,email,contact,password)
		values('$name',$age,'$designation','$gender','$email','$contact','$password')");
		if($r)
		{
			echo"success";
			$r1=mysql_query("delete from emp_request where emp_id =$id");
			if($r1)
			{
			echo"dele";
			header('Location: request.php');
			}
			else
			echo"not del";	
		}
		else
		echo'try';


?>