<?php
		include('home.php');
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		//session_start();
		if($_SESSION['value']==1)
			echo "Employee Added <br />";
		$_SESSION['value']=0;
		$result=mysql_query("select * from emp_request");
		if(mysql_num_rows($result)==0)
		{
			echo"No request exists";
		}
		else
		{
			echo"<table border='1'>";
			while($row=mysql_fetch_array($result))
			{	
				
				echo "<tr><td>".$row['emp_name']."</td><td>".$row['designation']."</td><td>".$row['contact']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>"."
										<form action='accept.php' method='post'>
											<input type='number' name='salary' placeholder='salary' required >
											<input type='hidden' name='emp_name' value='".$row['emp_name']."'>
											<input type='hidden' name='emp_id' value='".$row['emp_id']."'>
											<input type='hidden' name='designation' value='".$row['designation']."'>
											<input type='hidden' name='contact' value='".$row['contact']."'>
											<input type='hidden' name='email' value='".$row['email']."'>
											<input type='hidden' name='gender' value='".$row['gender']."'>
											<input type='hidden' name='age' value='".$row['age']."'>
											<input type='hidden' name='password' value='".$row['password']."'>
											<input type='hidden' name='date' value='".$row['joining_date']."'>
											<input type='submit' name='submit' value='Accept'>
										</form>
										"."</td><td>"."
														<form action='reject.php' method='post'>
															<input type='hidden' name='emp_id' value='".$row['emp_id']."'>
															<input type='submit' name='submit' value='Reject'>
														</form>
										
										
										
										"."</td></tr>";
			
			}
			echo"</table>";	
		}
?>

