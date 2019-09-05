<?php

session_start();

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

//recupère les données à ajouter pour les modifier           
$nameBoard = $_POST['nameBoard'];
$SerialBoard = $_POST['SerialBoard'];


           
//cherche la carte selectionné
$listComposantSql = "SELECT boards,serialBoards
							FROM boards
							WHERE serialBoards = '$nameBoard'";
$requeteListComposant = mysqli_query ($db,$listComposantSql);

while ($data = mysqli_fetch_array($requeteListComposant)){
		$nameBoard = $data['nameBoard'];
		$SerialBoard = $data['SerialBoard'];
		$_SESSION['nameBoard'] = $nameBoard;
		$_SESSION['SerialBoard'] = $SerialBoard;
		



        
           
           
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