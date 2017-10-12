<?php
	session_start();
	$_SESSION['value']=0;
	header('Location: login.php');


?>