<html>
<head>
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="password1.php">
		<input type="password" name="password" placeholder='Current Password' required>
		<input type="password" name="passwordn" placeholder='New Password' required>
		<input type="password" name="passwordc" placeholder='Confirm Password' required>
		<input type="submit" name="submit" value="Change">
	</form>
</body>
</html>
<?php
session_start();
if($_SESSION['value']==1)
{
	echo 'Password and confirm Password are not same';
	$_SESSION['value']=0;
}
if($_SESSION['value']==2)
{
	echo 'Password could not be changed. Invalid current Password.';
	$_SESSION['value']=0;
}
if($_SESSION['value']==3)
{
	echo 'Password changed.';
	$_SESSION['value']=0;
}
?>