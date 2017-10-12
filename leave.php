<?php
	include('home2.php');
	$date=date("y-m-d");
	$date1='20'.$date;
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
<html>
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
	elseif($_SESSION['value']==1)
		{
			echo "Request Send <br />";
				$_SESSION['value']=0;
		}
	else
	echo 'your request is already pending';

?>
