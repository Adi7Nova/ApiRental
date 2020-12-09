<?php

include("connect.php");

	session_start();
	if (isset($_POST['username'])  && isset($_POST['password']))
	{
		$Username = $_POST ['username'];
		
		$Password = $_POST ['password'];
 
	 $login = "SELECT * FROM tbuser where username='$Username' and password='$Password'";
	 $check = mysqli_fetch_array(mysqli_query($con,$login));
	
	if($check > 0){
	$response["suksess"]  = 1;
	$response["message"]  = "berhasil";
	$response["id"] = $check["id"];
	$_SESSION['id'] = $check["id"];
	$response["noktp"] = $check["noktp"];
	$response["nohp"] = $check["nohp"];
	$response["email"] = $check["email"];
		if ($check["roleuser"] == 1) {
		$response["roleuser"] = "Customer";
		}
		if ($check["roleuser"] == 2) {
		$response["roleuser"] = "Admin";
		}
	} else {
	$response["suksess"]  = 0;
	$response["message"]  = "tidak berhasil";
	}

	echo json_encode($response);
	}
mysqli_close($con)
?>