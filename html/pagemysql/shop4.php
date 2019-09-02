<?php
session_start();

	$ongle =  4;
	$_SESSION['numeroOnglet'] = $ongle;
	
	header("location:shop.php");           
?>