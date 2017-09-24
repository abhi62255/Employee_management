<?php
	if(isset($_POST['submit']))
	{
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$value=$_POST['value'];
		echo $value;
		if($value==1)
		{
			$id=$_POST['id'];
			$result=mysql_query("select * from emp_details where emp_id=$id");
		}
		
		if($value==2)
		{
			$designation=$_POST['designation'];
			$result=mysql_query("select * from emp_details where designation='$designation'");
		
		}
		
		if($value==3)
		{
			$salary=$_POST['salary'];
			$result=mysql_query("select * from emp_details where salary<$salary");
		}
		echo"<table border='1'>";
			while($row=mysql_fetch_array($result))
			{
				echo "<tr><td>".$row['emp_name']."</td><td>".$row['designation']."</td><td>".$row['contact']."</td><td>".$row['email']."</td><td>".$row['emp_id']."</td></tr>";
			}
			echo"</table>";
	}
	else
	header('Location: view_emp.html');
		
?>