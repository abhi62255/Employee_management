<?php
	include('home2.php');
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$r=mysql_query("select * from message");
	echo "<table border='1'>";
	echo"<tr><td>Message</td><td>Date</td></tr>";
	while($row=mysql_fetch_array($r))
	{
		echo "<tr><td>".$row['message']."</td>
					<td>".$row['date']."</td></tr>";
		
	}
	echo "</table>";
	
?>