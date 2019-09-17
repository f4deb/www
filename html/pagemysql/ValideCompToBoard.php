<?php

session_start();


$boardNameSelect1 = $_SESSION['boardNameSelect1'];

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

/*
$sql = "SELECT boards,id_boards
							FROM boards
							WHERE boards = '$boardNameSelect1';
							GROUP By id_Boards";
	$requestSql = mysqli_query($db,$sql);
	while ($data = mysqli_fetch_array($requestSql)){	
		$idBoards[] = $data['id_Boards'];
	}

           
  */         
           
           
//$_SESSION['boardNameSelect1']           
                   

//Requete d'insertion du composant selectionné dans la table "composant"
$sql = "INSERT INTO boardsRequirements 
					 (rep_topo,id_boards,id_composant)". 
			"values ('".$_SESSION['repTopoSelect']."','".$_SESSION['$numBoards'][1]."','".$_SESSION['codeComposant']."')"; 

$result = mysqli_query($db,$sql);



header("location:shop.php"); 	
        
?>