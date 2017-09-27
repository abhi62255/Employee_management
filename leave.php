<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
	$date=date("y-m-d");
	$date1='20'.$date;
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$email=$_SESSION['username'];
	$r=mysql_query("select * from emp_details where email='$email'");
		$row=mysql_fetch_array($r);
		$id=$row['emp_id'];
		$name=$row['emp_name'];
	$r1=mysql_query("select * from leave_request where emp_id=$id && status='----'");
	$a=mysql_num_rows($r1);
	if($a==0)
	{
?>
<body>
	<form action="leave2.php" method="post">
		Starting date<input type="date" name="date" min="<?php echo $date1; ?>"> Ending date
		<input type="date" name="date2" min="<?php echo $date1; ?>">
		Reasone<input type="text" name="reason"><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>
<?php
	}
	else
	echo 'your request is already pending';


?>
