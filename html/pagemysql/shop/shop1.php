<?php
session_start();

	$ongle =  1;
	$_SESSION['numeroOnglet'] = $ongle;
	
	header("location:../shop.php");           
?>
