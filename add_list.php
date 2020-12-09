<?php
include("connect.php");

$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$kode = $_POST['kode'];
$hargasewa = $_POST['hargasewa'];
	$sql = "INSERT INTO tbsepeda ( jenis, merk,  hargasewa )  VALUES ('$jenis', '$merk', '$hargasewa')";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>