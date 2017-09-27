<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<form action="message.php" method="post">
		<input type="text" name="message"  />
		<input type="submit" name="submit" value="send" />
	</form>
</body>
</html>

<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$r=mysql_query("select * from message");
	echo "previous Messages";
	echo "<table border='1'>";
	echo"<tr><td>Id</td><td>Message</td><td>Date</td><td>Action</td></tr>";
	while($row=mysql_fetch_array($r))
	{
		echo "<tr><td>".$row['id']."</td>
				<td>".$row['message']."</td>
				<td>".$row['date']."</td>
				<td>
					<form method='post' action='delete_message.php'>
						<input type='hidden' name='id' value=".$row['id'].">
						<input type='submit' name='subbmit' value='delete'>
					</form>
				</td>
				</tr>";
		
	}
	echo "</table>";
	
	
?>