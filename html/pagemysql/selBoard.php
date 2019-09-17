<?php session_start(); ?>

<?php 

	$_SESSION['boardNameSelect1'] = $_POST['nameBoard1'];
	$boardNameSelect1 = $_SESSION['boardNameSelect1'];
	
// connect to db
$db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');
$sql = "SELECT boards,id_boards
			FROM boards
			WHERE boards = '$boardNameSelect1'";
     
  $requeteMaxBoardlist = mysqli_query($db,$sql);
  
  $data = mysqli_fetch_row($requeteMaxBoardlist);	
	
	$_SESSION['$numBoards'] = $data;	
	//echo print_r($_SESSION['$numBoards']);

  header("location:shop.php"); 	
        
?>