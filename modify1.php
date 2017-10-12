<?php
	include('home.php');
?>
<html>
	
	<body>
		<form action="" method="post"><br>
		<input type="text" name="emp_name" placeholder="name"><br>
		<input type="text" name="emp_age" placeholder="Age" ><br>
		<input type="number" name="emp_contact" placeholder="Contact" ><br>
		<input type="number" name="emp_salary" placeholder="Salary" ><br>
		Designation<select name="emp_designation" >
					<option value="Senior Manager">Senior Manager</option>
					<option value="Manager">Manager</option>
					<option value="Senior Developer">Senior Developer</option>
					<option value="Developer">Developer</option>
					<option value="Senior Designer">Senior Designer</option>
					<option value="Designer">Designer</option>
					<option value="Marketing Manager">Marketing Manager</option>
					</select><br>
		<input type="submit" name="modify" value="Modify">
	</body>
	</html>
<?php
		//session_start();
		if(isset($_POST['modify']))
		{
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$name=$_POST['emp_name'];
		$age=$_POST['emp_age'];
		$designation=$_POST['emp_designation'];
		$contact=$_POST['emp_contact'];
		$salary=$_POST['emp_salary'];
		echo $_SESSION['id'];
		$id=$_SESSION['id'];
	
		$r=mysql_query("update emp_details set emp_name='$name' , age=$age , designation='$designation' , contact=$contact , salary=$salary where emp_id=$id");
		if($r)
		header('Location: modify_emp.php');
		else
		echo"tey agin last";		

}
?>
