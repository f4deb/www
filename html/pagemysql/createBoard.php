<?php

session_start();

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

$sql = "SELECT MAX(id_boards)
			FROM boards";
     
  $requeteMaxBoardlist = mysqli_query($db,$sql);
  
  $max = mysqli_fetch_row($requeteMaxBoardlist);
  $max[0]++;
  
           
     
//Requete d'insertion du composant selectionné dans la table "composant"
$sql = 'INSERT INTO `boards`
   (`boards`,`serialBoards`,`id_boards`)
VALUES
	("'.$_POST['nameBoard'].'","'.$_POST['serialBoard'].'","'.$max[0].'");'; 

$result = mysqli_query($db,$sql);

header("location:shop.php"); 	
        
?>