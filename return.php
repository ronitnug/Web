<?php

	require_once "Auth/OpenID/Consumer.php";
	require_once "Auth/OpenID/FileStore.php";

	session_start();
	$store = new Auth_OpenID_FileStore('./old_store');

	$consumer = new Auth_OpenID Consumer($store);
	$response = $consumer->complete('return.php');

	if ($response->status == AUTH_OpenID_SUCCESS){
		$_SESSION['OPENID AUTH'] == true;
	}
	else{
		$_SESSION['OPENID AUTH'] == false;
 	}
 	header('location: restricted.php');

?>


<!doctype html>
<html lang="en">

	<head>
		<title>CrowdSporting</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<script src="js/login.js" type="text/javascript"></script>
		<script src="js/101.js" type="text/javascript"></script>

		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/Gotham_Light_300.font.js"></script>


		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/101.css">
	</head>

	<body>

		<div class="header">
			<img src="img/crownlogo.png" alt="crown+logo" id="crownLogo">
			<span class="right">
				<span id="one0one">101</span><span id="spc"></span><span id="teamLogin">TEAM LOGIN</span>
			</span>
			<br id="line-ht">
		</div>
	</body>


</html>

