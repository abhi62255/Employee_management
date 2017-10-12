<?php
	include('home2.php');		
	include 'clander1.php';
	$r="97 08 25";
	$q=date("y m d");

	$i= explode(" ",$q); 
	$i[1]=1;
	$i[2]=1;
	$ins="20".$i[0]."-01-01";
	do{
		$i= explode("-",$ins);	
		$i[0]=$i[0]-2000;
		//echo $i[0];//y
		//echo $i[1];//m
		//echo $i[2];//d
		
		if($i[1]=='01'){
			$r1=0;
			$d=31;}
		
		if($i[1]=='02'){
			$r1=3;
			$d=28;}
		
		if($i[1]=='03'){
			$r1=3;
			$d=31;}
		
		if($i[1]=='04'){
			$r1=6;
			$d=30;}
		
		if($i[1]=='05'){
			$r1=1;
			$d=31;}
		
		if($i[1]=='06'){
			$r1=4;
			$d=30;}
		
		if($i[1]=='07'){
			$r1=6;
			$d=31;}
		
		if($i[1]=='08'){
			$r1=2;
			$d=31;}
		
		if($i[1]=='09'){
			$r1=5;
			$d=30;}
			
		if($i[1]=='10'){
			$r1=0;
			$d=31;}
		
		if($i[1]=='11'){
			$r1=3;
			$d=30;}
		
		if($i[1]=='12'){
			$r1=5;
			$d=31;}
		
		
		$s1=$i[0]+$i[2];
		$s2=round($i[0]/4);
		$s3=($s1+$s2+$r1+6)%7;
		$_SESSION['day_number']=$s3;
		if($s3==0)
			$day='Sunday';
			
		if($s3==1)
			$day='Monday';
			
		if($s3==2)
			$day='Tuesday';
			
		if($s3==3)
			$day='Wednesday';
			
		if($s3==4)
			$day='Thusday';
			
		if($s3==5)
			$day='Friday';
			
		if($s3==6)
			$day='Saturday';
			
		$_SESSION['day']=$day;
		$_SESSION['date']=$ins;
		$_SESSION['datey']=$i[0];
		$_SESSION['datem']=$i[1];
		$_SESSION['dated']=$i[2];
		call();
		$date = strtotime("+$d day", strtotime($ins));
		$ins=date("Y-m-d", $date);
		//echo $ins;
	}while($ins!='2018-01-01');


?>