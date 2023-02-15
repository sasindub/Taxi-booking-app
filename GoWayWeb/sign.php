<?php


	session_start();
	$db_name = "goway";
	$connection = mysqli_connect("localhost","root","",$db_name);

	$email = $_POST['mail'];
	$address = $_POST['loca'];
	$nic = $_POST['nic'];
	$tele = $_POST['tele'];
	$pass = $_POST['pass'];
	if(isset($_POST['sub']))//if click submit button
	{
		//('".$email."','".$address."',".$tele.",".$nic.",'".$pass."')"
$query = "insert into usr(email,address,mobile,nic,pass) values ('".$email."','".$address."',". $tele .",".$nic.
			",'".$pass."');";
		mysqli_query($connection,$query);

		echo "<a>done></a>";
       
	}

	header("Location: WADProject\home.html");
	die;



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1><?php 
	$done
?></h1>
</body>
</html>