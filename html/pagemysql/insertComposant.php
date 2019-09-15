<?php

session_start();

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');




           
           
           
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