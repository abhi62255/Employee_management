<html>
<head>
<title>Untitled Document</title>
</head>

<body>
	<form action="view_emp1.php" method="post">
		ID<input type="number" name="id" />
		<input type="hidden" name="value" value="1"/>
		<input type="submit" name="submit" value="search"/>
	</form>
	<form action="view_emp1.php" method="post">
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
	<form action="view_emp1.php" method="post">
		SALARY<input type="number" name="salary" placeholder="salary < ?"/>
		<input type="hidden" name="value" value="3"/>
		<input type="submit" name="submit" value="search" />
	</form>
</body>
</html>
<?php
	session_start();
	if($_SESSION['value']==1)
		{
			echo "Work has been granted ";
		}
	if($_SESSION['value']==2)
		echo "Their is some problem in server try again later";
	$_SESSION['value']=0;
	

?>