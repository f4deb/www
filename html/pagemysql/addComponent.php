<?php

session_start();

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

//recupère les données à ajouter pour les modifier           
$typeComposant = $_POST['type'];
$typeBoitier = $_POST['boitier'];


           
//cherche le type selectionné
$listComposantSql = "SELECT typecomposant,numTypeComposant
							FROM typeComposant
							WHERE typecomposant = '$typeComposant'";
$requeteListComposant = mysqli_query ($db,$listComposantSql);

while ($data = mysqli_fetch_array($requeteListComposant)){
		$typeComposant = $data['typecomposant'];
		$numTypeComposant = $data['numTypeComposant'];
		$_SESSION['typeComposant'] = $typeComposant;
		$_SESSION['numTypeComposant'] = $numTypeComposant;
		
};



//cherche le boitier selectionner
$listBoitierSql = "SELECT typeBoitier,id_typeBoitier
							FROM boitierComposant 
							WHERE typeBoitier = '$typeBoitier'";
 
							
$requeteListBoitiersql=mysqli_query($db,$listBoitierSql);							
							
while ($data = mysqli_fetch_array($requeteListBoitiersql)){
		$typeBoitier =	$data['typeBoitier'];	
		$id_typeBoitier = $data['id_typeBoitier'];		
		$_SESSION['typeBoitier'] =	$typeBoitier;
		$_SESSION['id_typeBoitier'] = $id_typeBoitier;
};
        
           
           
     
//Requete d'insertion du composant selectionné dans la table "composant"
$sql = 'INSERT INTO `composant`
   (`valeur_composant`,`boitier_composant`,`id_typeComposant`,`stock_composant`,`id_composant`)
VALUES
	("'.$_POST['valeur_comp'].'","'.$id_typeBoitier.'","'.$numTypeComposant.'","'.$_POST['stock_composant'].'","'.$_POST['id_composant'].'");'; 

$result = mysqli_query($db,$sql);

header("location:shop.php"); 	
        
?>