<?php

session_start();

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

//recupère les données à ajouter pour les modifier           
$type[] = $_POST['type'];
$_SESSION['typeSel'] = $type;
$boitier[] = $_POST['boitier'];


// Détermine le numéro du type de composant sélectionné
$sql = "SELECT typecomposant,numTypeComposant
			FROM typeComposant
			WHERE typecomposant = '$type[0]'";
$requestSql = mysqli_query($db,$sql);
	while ($data = mysqli_fetch_array($requestSql)){
		$numTypeComposant[] = $data['numTypeComposant'];
	}	
	
	//$numTypeComposant[] = mysqli_fetch_row($requestSql);	




//echo "<BR>";

//echo print_r($numTypeComposant);
//echo "<BR>";
//echo print_r($_SESSION['typeSel']);

//echo "<BR>";
//echo print_r($_SESSION['valeurComposant']);


// Détermine le numéro du type de boiter sélectionné







// liste des composants a afficher de le menu désésignation
$sql = "SELECT valeur_composant,id_typeComposant,id_composant
			FROM composant
			WHERE id_typeComposant = '$numTypeComposant[0]'";
$requestSql = mysqli_query($db,$sql);
	while ($data = mysqli_fetch_array($requestSql)){
		$valeurComposant[] = $data['valeur_composant'];
		$idTypeComposant[] = $data['id_typeComposant'];
		$idComposant[] = $data['id_composant'];		
		$_SESSION['valeurComposant'] = $valeurComposant;
		$_SESSION['idTypeComposant'] = $idTypeComposant;
		$_SESSION['idComposant'] = $idComposant;
	}	


           
           
/*     
//Requete d'insertion du composant selectionné dans la table "composant"
$sql = 'INSERT INTO `composant`
   (`valeur_composant`,`boitier_composant`,`id_typeComposant`,`stock_composant`,`id_composant`)
VALUES
	("'.$_POST['valeur_comp'].'","'.$id_typeBoitier.'","'.$numTypeComposant.'","'.$_POST['stock_composant'].'","'.$_POST['id_composant'].'");'; 

$result = mysqli_query($db,$sql);
*/
header("location:shop.php"); 	
        
?>