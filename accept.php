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
		$salary=$_POST['salary'];
		$date=$_POST['date'];
		
		$r=mysql_query("INSERT INTO emp_details(emp_name,age,designation,gender,email,contact,password,salary,joining_date)
		values('$name',$age,'$designation','$gender','$email','$contact','$password',$salary,'$date')");
		if($r)
		{
			$r1=mysql_query("delete from emp_request where emp_id =$id");
			$r2=mysql_query("insert into login_details values('$email','$password')");
			header('Location: request.php');
				
		}
		else
		echo'Your Information Is Wrong try sign up again';


?>