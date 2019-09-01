<?php
session_start();

	$ongle =  2;
	$_SESSION['numeroOnglet'] = $ongle;
	
	header("location:shop.php");           
?>
