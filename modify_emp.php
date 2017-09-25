<?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		$con=mysql_connect('localhost','root','');
		mysql_select_db('employee',$con);
		$result=mysql_query("select * from emp_details");
		if(mysql_num_rows($result)==0)
		{
			echo"No column exists";
		}
		else
		{
			echo"<table border='1'>";
			while($row=mysql_fetch_array($result))
			{	
				
				echo "<tr><td>".$row['emp_name']."</td><td>".$row['designation']."</td><td>".$row['contact']."</td><td>".$row['email']."</td><td>".$row['gender']."</td><td>"."
										<form action='modify.php' method='post'>
											<input type='hidden' name='emp_id' value='".$row['emp_id']."'>
											<input type='submit' name='submit' value='Modify'>
										</form>
										"."</td><td>"."
														<form action='delete.php' method='post'>
															<input type='hidden' name='emp_id' value='".$row['emp_id']."'>
															<input type='hidden' name='email' value='".$row['email']."'>
															<input type='submit' name='submit' value='delete'>
														</form>
										
										
										
										"."</td></tr>";
			
			}
			echo"</table>";	
		}
?>

