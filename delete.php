<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$id=$_POST['emp_id'];
		
		
		
		$r1=mysql_query("delete from emp_details where emp_id =$id");
			if($r1)
			{
			echo"dele";
			header('Location: modify_emp.php');
			}
			else
			echo"not del";	
			
?>