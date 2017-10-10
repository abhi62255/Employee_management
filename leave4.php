<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	$value=$_POST['value'];
	$id=$_POST['emp_id'];
	if($value==1)
	{
		$result=mysql_query("select * from leave_request where emp_id=$id && status='----'");
		while($row=mysql_fetch_array($result))
			{
				$begin = new DateTime($row['starting_date']);
				$end = new DateTime($row['ending_date']);
				
				$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
	
				foreach($daterange as $date){
	    			$ins=$date->format("Y-m-d");
					echo $ins;
					mysql_query("insert into holiday_details values($id,'$ins')");
					}
					$date = strtotime("+1 day", strtotime($ins));
					$ins=date("Y-m-d", $date);
					mysql_query("insert into holiday_details values($id,'$ins')");
					
					
			}
		$r=mysql_query("update leave_request set status='Accepted' where emp_id=$id && status='----'");
		mysql_query("insert into holiday_details values");
	}
	if($value==2)
	{
		$r1=mysql_query("update leave_request set status='Rejected' where emp_id=$id && status='----'");
		if($r1)
		echo"grant decline";
	}
	
	
?>