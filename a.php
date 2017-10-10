<?php
	$begin = new DateTime('2013-02-01');
	$end = new DateTime('2013-02-13');
	$daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);
	
	foreach($daterange as $date){
	    echo $date->format("Y-m-d") . "<br>";
	}
?>