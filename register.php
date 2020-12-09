<?php
include("connect.php");
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['noktp']) && isset($_POST['nohp']) && isset($_POST['alamat']) && isset($_POST['roleuser']) ) {
 
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $nohp = $_POST['nohp'];
  $noktp = $_POST['noktp'];
  $alamat = $_POST['alamat'];
  $Roleuser = $_POST['roleuser'];

  
  $json["SENDER"] = array();
  $json["STATUS"] = array();
  $json["MESSAGE"] = array();
 
    $sql = "INSERT INTO tbuser(username, email, password, noktp, nohp, alamat, roleuser) VALUES ('$username', '$email', '$password', '$noktp', '$nohp', '$alamat', '$roleuser')";
    $result = mysqli_query($con, $sql);
    if ($result) {
      $json["STATUS"] = "1";
      $json["MESSAGE"] = "SUCCESS";
    } else {
      $json["STATUS"] = "0";
      $json["MESSAGE"] = mysqli_error($con);  
    }
  }  
  else {
    $json["SENDER"] = "Rentalsepeda";
    $json["STATUS"] = "FAILED";
    $json["MESSAGE"] = "INPUT NOT FOUND";
  }
  echo json_encode($json);

mysqli_close($con); 

?>