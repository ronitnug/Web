<?php

session_start();

if(!isset($_SESSION['OPENID_AUTH']) || $_SESSION['OPENID_AUTH'] != true){
	die("You are not permitted");
}
?>

