<?php

session_start();

$nameBoard = $_POST['nameBoard'];

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

$sql = "SELECT id_boards
			FROM boards
			WHERE boards = '$nameBoard'";
     
  $requeteIdBoards = mysqli_query($db,$sql);
  
  $idBoard = mysqli_fetch_row($requeteIdBoards);
  
  
  
  
           
     
//Requete d'insertion du composant selectionné dans la table "composant"
$sql = 'INSERT INTO `boards`
   (`boards`,`serialBoards`,`id_boards`)
VALUES
	("'.$_POST['nameBoard'].'","'.$_POST['serialBoard'].'","'.$idBoard[0].'");'; 

$result = mysqli_query($db,$sql);



header("location:shop.php"); 	
        
?>