<?php
session_start();

	$ongle =  3;
	$_SESSION['numeroOnglet'] = $ongle;
	
	header("location:shop.php");           
?>
