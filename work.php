<?php
	include('home2.php');
	if($_SESSION['value']==1)
	echo "Complete Request Send";
	
	error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$email=$_SESSION['username'];
		$r=mysql_query("select * from emp_details where email='$email'");
		if($r>0)
		{
			$array=mysql_fetch_array($r);
			$id=$array['emp_id'];
			$to=mysql_query("select * from todolist where emp_id=$id");
		}
		echo"<table border='1'>";
		echo"<tr><td>Work</td><td>Date</td></tr>";
			while($row=mysql_fetch_array($to))
			{
				echo "<tr><td>".$row['list']."</td><td>".$row['date']."</td><td>
				<form action='complete.php' method='post'> 
					<input type='hidden' name='id' value=".$row['id'].">
					
				</td>
				<td>
					<input type='submit' name='submit' value='Complete'>
					</form>
				</td></tr>";
			}
			echo"</table>";
?>