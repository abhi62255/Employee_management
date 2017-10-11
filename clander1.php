<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con=mysql_connect('localhost','root','');
	mysql_select_db('employee',$con);
	function call()
	{
		//echo $_SESSION['day']." ";
		//echo $_SESSION['date']."<br />";
		$i1= explode("-",$_SESSION['date']);
		$m=1;
		//echo $i1[0]." ".($i1[1]-1);
		

	echo"<table border='0' bgcolor='#F4F4F4' alin='auto' style='text-align:right'>";
		$monthNum  = $i1[1];					// Converting month number in Month name
		$dateObj   = DateTime::createFromFormat('!m', $monthNum);
		$monthName = $dateObj->format('F'); // March
		echo"<tr><th colspan='7' style='text-align:center'>".$i1[0].' '.$monthName."</th></tr>";
		echo"<tr><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thusday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr>";

		echo "<tr>";
		if($_SESSION['day_number']==0){
		echo"<td></td><td></td><td></td><td></td><td></td><td></td>"; $j=6; }
		if($_SESSION['day_number']==1){
		echo"";$j=0; }
		if($_SESSION['day_number']==2){
		echo"<td></td>";$j=1; }
		if($_SESSION['day_number']==3){
		echo"<td></td><td></td>"; $j=2; }
		if($_SESSION['day_number']==4){
		echo"<td></td><td></td><td></td>"; $j=3; }
		if($_SESSION['day_number']==5){
		echo"<td></td><td></td><td></td><td></td>"; $j=4; }
		if($_SESSION['day_number']==6){
		echo"<td></td><td></td><td></td><td></td><td></td>"; $j=5; }
		for($i=0; $i<6; $i++)
		{
			for(; $j<7; $j++)
			{	if($i1[2]>1 && $i1[2]<10)
					$date=$i1[0].'-'.$i1[1].'-0'.$i1[2];
				else
					$date=$i1[0].'-'.$i1[1].'-'.$i1[2];
				//echo $date;
				$today = date("Y-m-d");
				$id=$_SESSION['emp_id'];
				$result=mysql_query("select * from holiday_details where emp_id=$id and date='$date'");
				if($i1[2]>31 || $i1[2]>28 && $i1[1]=='02' || $i1[2]>31 && ($i1[1]=='04' || $i1[1]=='06' || $i1[1]=='09' || $i1[1]=='11'))
					echo "<td>";
				elseif($j==6)
					echo "<td bgcolor=#A4FE9E>";
				elseif(mysql_num_rows($result)>0)
					echo "<td bgcolor=#FF7777>";
				elseif($date == $today)
					echo "<td bgcolor=#00FFFF>";
				elseif($date < $today)
					echo "<td bgcolor=#B0FFFF>";
				else
					echo "<td>";
				if($i1[1]=='01'){
					if($i1[2]<32){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='02'){
					if($i1[2]<29){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='03'){
					if($i1[2]<32){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='04'){
					if($i1[2]<31){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='05'){
					if($i1[2]<32){
					echo $i1[2];
					}
					}
				elseif($i1[1]=='06'){
					if($i1[2]<31){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='07'){
					if($i1[2]<32){
					echo $i1[2];
					}
					}
				elseif($i1[1]=='08'){
					if($i1[2]<32){
					echo $i1[2];
					}
					}
				elseif($i1[1]=='09'){
					if($i1[2]<31){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='10'){
					if($i1[2]<32){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='11'){
					if($i1[2]<31){
					echo $i1[2];
					}
					else
					$i=6;
					}
				elseif($i1[1]=='12'){
					if($i1[2]<32){
					echo $i1[2];
					}
					else
					$i=6;
					}
				echo"</td>";
				$i1[2]=$i1[2]+1;
	
			}
			$j=0;
			echo "</tr><tr>";
				
		}
		echo "<br />";


	}



?>
