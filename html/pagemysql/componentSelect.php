<?php

session_start();

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');

$_SESSION['repTopoSelect'] = $_POST['repTopo'];
$_SESSION['valueComponent'] = $_POST['composant'];




header("location:shop.php"); 	
        
?>