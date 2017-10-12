<?php
	include('home.php');
	if($_SESSION['value']==1)
		echo "Authorized";
	$_SESSION['value']=0;
?>
<html>
<head>
<title>Untitled Document</title>
</head>

<body>
	<form action="unauthorized_leave1.php" method="post">
		ID<input type="number" name="id" />
		<input type="hidden" name="value" value="1"/>
		<input type="submit" name="submit" value="search"/>
	</form>
	<form action="unauthorized_leave1.php" method="post">
		Designation<select name="designation">
					<option value="Senior Manager">Senior Manager</option>
					<option value="Manager">Manager</option>
					<option value="Senior Developer">Senior Developer</option>
					<option value="Developer">Developer</option>
					<option value="Senior Designer">Senior Designer</option>
					<option value="Designer">Designer</option>
					<option value="Marketing Manager">Marketing Manager</option>
					</select>
		<input type="hidden" name="value" value="2" />
		<input type="submit" name="submit" value="search"/>
	</form>
</body>
</html>
<?php
	if($_SESSION['auth']==1)
	echo"Leave authorized";
?>
