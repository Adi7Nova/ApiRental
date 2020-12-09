<?php	
	$server		= "localhost"; 
	$user		= "root";
	$password	= ""; 
	$database	= "dbrental"; 
	
	
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Gagal terhubung : " . mysqli_connect_error();
	}
	else{
		mysqli_select_db($con,$database);
	}
?>