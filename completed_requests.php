<?php
	session_start();
	if($_SESSION['value']==1)
		echo "Accepted";
	if($_SESSION['value']==2)
		echo "Rejected";
	$_SESSION['value']=0;
	error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$to=mysql_query("select * from completed_todolist");
		echo"<table border='1'>";
		echo"<tr><td>Work</td><td>list</td><td>Date</td></tr>";
			while($row=mysql_fetch_array($to))
			{	
				echo "<tr><td>".$row['emp_id']."</td>
					<td>".$row['list']."</td>
					<td>".$row['date']."</td>
					<td>
						<form action='action.php' method='post'> 
							<input type='hidden' name='id' value=".$row['id'].">
							<input type='hidden' name='value' value='1'>
					</td>
					<td>
						<input type='submit' name='submit' value='Accept'>
						</form>
					</td>
					<td>
						<form action='action.php' method='post' > 
							<input type='hidden' name='id' value=".$row['id'].">
							<input type='hidden' name='emp_id' value=".$row['emp_id'].">
							<input type='hidden' name='value' value='2'>
					</td>
					<td>
						<input type='submit' name='submit' value='Reject'>
						</form>
					</td>
					</tr>";
			}
			echo"</table>";
?>