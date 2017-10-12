<?php
	include('home2.php');
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$email=$_SESSION['username'];
	$r=mysql_query("select * from emp_details where email='$email'");
		$row=mysql_fetch_array($r);
		$id=$row['emp_id'];
	$result=mysql_query("select * from leave_request where emp_id=$id");
	echo"<table border='1'>";
			while($row=mysql_fetch_array($result))
			{
				$id=$row['emp_id'];
			echo "<tr><td>".$row['emp_id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['starting_date']."</td>
				<td>".$row['ending_date']."</td>
				<td>".$row['reason']."</td>
				<td>".$row['status']."</td>
				</tr>";
			}
			echo"</table>";
		
	
?>