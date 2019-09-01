<?php
session_start();
$_SESSION ['abc'][3] = "riri";  


$_SESSION['abc'][0] = "aa";



<!-- Recupere les types selectionné et les enregistre dans la base -->
<?php
if (isSet ($_POST ["btSubmit"]))
	{ foreach ($_POST ["choix"] as $valeur) {
   $_SESSION ['i'][]= $valeur;
	}   




// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])
           or die('could not connect to database');
          
$sql = "UPDATE typeComposant 
			SET printTypeComposant = $toto[4] 
			WHERE numTypeComposant = 4;";//$numTypeComposant[$j]

$result = mysqli_query($db,$sql);

}

?>

//$_SESSION['abc[0]'] = 6;
//$_SESSION['abc[3]'] = $$_POST['choix[1]'];
//$_SESSION["abc"[1]] = "11";
/*


//$_POST["choix[4]"] = 0;
$toto[4] = $_POST["choix[4]"];
$_SESSION["abc"] = $toto[4];
//$toto[4] = 0;

// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])
           or die('could not connect to database');
          
$sql = "UPDATE typeComposant 
			SET printTypeComposant = $toto[4] 
			WHERE numTypeComposant = 4;";//$numTypeComposant[$j]

$result = mysqli_query($db,$sql);

*/

header("location:shop.php"); 	
        
?>