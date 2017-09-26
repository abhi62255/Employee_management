<?php
	if(isset($_POST['submit']))
	{
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$id=$_POST['id'];
		$todo=$_POST['todo'];
		$date=date("d-m-y");
		$result=mysql_query("insert into todolist(emp_id,list,date) values($id,'$todo','$date')");
		$_SESSION['inc']=1;
		header('Location: view_emp1.php');
	}

?>