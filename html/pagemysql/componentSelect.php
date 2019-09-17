<?php

session_start();

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

$_SESSION['repTopoSelect'] = $_POST['repTopo'];
$_SESSION['valueComponent'] = $_POST['composant'];
$valueComponent = $_SESSION['valueComponent'];

$sql = "SELECT valeur_composant,boitier_composant,id_typeComposant,id_composant
			FROM composant
			WHERE valeur_composant = '$valueComponent'";
	$requeteSql = mysqli_query($db,$sql);
	while	($data = mysqli_fetch_array($requeteSql)){
		$codeComposant = $data['id_composant'];
		$_SESSION['codeComposant'] = $codeComposant;
	} 
	
header("location:shop.php"); 	
        
?>