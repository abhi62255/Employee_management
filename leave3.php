<?php
	session_start();
	if($_SESSION['value']==1)
		echo "Rejected";
	if($_SESSION['value']==2)
		echo "Accepted";
	$_SESSION['value']=0;
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$result=mysql_query("select * from leave_request where status='----'");
	echo"<table border='1'>";
			while($row=mysql_fetch_array($result))
			{
				$id=$row['emp_id'];
			echo "<tr><td>".$row['emp_id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['starting_date']."</td>
				<td>".$row['ending_date']."</td>
				<td>".$row['reason']."</td>
				<td>
				<form action='leave4.php' method='post'> 
					<input type='hidden' name='value' value='1'>
					<input type='hidden' name='emp_id' value=".$id.">
					<input type='submit' name='submit' value='Accept'>
					</form>
				</td>
				<td>
					<form action='leave4.php' method='post'>
						<input type='hidden' name='value' value='2'>
						<input type='hidden' name='emp_id' value=".$id.">
						<input type='submit' name='submit' value='Rejected'>
					</form>
				</td>
				</tr>";
			}
			echo"</table>";
			if($row=mysql_num_rows($result)==0)
			{
				echo "No request exits";
			}
?>