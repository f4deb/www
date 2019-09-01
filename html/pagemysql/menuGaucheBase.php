<?php
session_start();

?>

<!-- Recupere les types selectionné et les enregistre dans la base -->
<?php




//action si le bouton envoyer est cliquer			
if (isSet ($_POST ["btSubmit"])){
	// Mmasque tous les composants
		$sql = "UPDATE typeComposant 
			SET printTypeComposant = '0';";
		$result = mysqli_query($db,$sql);
	
	//active les boutons choisis
	foreach ($_POST['choix'] as $value){	  
           
		$sql = "UPDATE typeComposant 
			SET printTypeComposant = '1' 
			WHERE typeComposant = '$value' ;";

		$result = mysqli_query($db,$sql);
	}
	unset ($value);
}
?>

<!-- ******************************************************************************* --> 
<!-- ******************************************************************************* --> 
<!-- prepare les données de colonnes principal de la liste des composants à afficher -->
<?php
	$maxNumTypeComposantsql = "SELECT typeComposant,printTypeComposant,numTypeComposant 
									FROM typeComposant";
											
	$requeteMaxNumTypeComposantSql=mysqli_query($db,$maxNumTypeComposantsql);
	while ($data = mysqli_fetch_array($requeteMaxNumTypeComposantSql)){
		$nomTypeComposant[] = 	$data['typeComposant'];	
		$_SESSION['nomTypeComposant'] = 	$nomTypeComposant;
		$printTypeComposant[] = $data['printTypeComposant'];	
		$numTypeComposant[] = $data['numTypeComposant'];
	}
?>

<!-- Determine le nombre de type de composant dans la base-->
<?php
	$maxNumTypeComposantsql = "SELECT numTypeComposant,typeComposant 
									FROM typeComposant 
									where numTypeComposant =
											(select max(numTypeComposant)
											from typeComposant)";
											
	$requeteMaxNumTypeComposantSql=mysqli_query($db,$maxNumTypeComposantsql);
	while ($data = mysqli_fetch_array($requeteMaxNumTypeComposantSql)){
		$totalTypeComposant = $data['numTypeComposant'];
		$_SESSION['totalTypeComposant'] = $totalTypeComposant;
		//echo $totalTypeComposant; //affiche le résultat					
	}
?> 
<!-- ******************************************************************************* --> 
<!-- ******************************************************************************* --> 
<!-- prepare les données de boitier à afficher -->
<?php
	$boitierComposantsql = "SELECT typeBoitier,id_typeBoitier,printBoitierComposant 
									FROM boitierComposant";											
	$requeteBoitierComposantsql=mysqli_query($db,$boitierComposantsql);
	while ($data = mysqli_fetch_array($requeteBoitierComposantsql)){
		$nomTypeBoitier[] = 	$data['typeBoitier'];	
		$printBoitierComposant[] = $data['printBoitierComposant'];	
		$id_typeBoitier[] = $data['id_typeBoitier'];
		
		$_SESSION['nomTypeBoitier'] = $nomTypeBoitier;
	}
	//echo print_r($_SESSION['nomTypeBoitier']);
?>


<!-- Determine le nombre de boitier de composant dans la base-->
<?php

//$totalBoitierComposant = $_SESSION['boitierComposant']

	$maxBoitierComposantsql = "SELECT typeBoitier,id_typeBoitier 
									FROM boitierComposant 
									where id_typeBoitier =
											(select max(id_typeBoitier)
											from boitierComposant)";
											
	$requeteMaxBoitierComposantsql=mysqli_query($db,$maxBoitierComposantsql);
	while ($data = mysqli_fetch_array($requeteMaxBoitierComposantsql)){
		$totalBoitierComposant = $data['id_typeBoitier'];
		$_SESSION['totalBoitierComposant'] = $totalBoitierComposant;				
	}
	//echo $_SESSION['totalBoitierComposant']; //affiche le résultat

?>


<!-- ******************************************************************************* --> 
<!-- ******************************************************************************* --> 
	






<!--==Début col gauche==-->
<table ALIGN="left" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1">
	<tr>
   	<td class="ent"  >
      	<b><i> Type </i></b>
    	</td>
	</tr>

<form action="" method="POST">
	<?php 
	$j=0;
	while($j <= $totalTypeComposant ) { 
	?>
		<tr>
  			<td>
  			<!-- php echo $j; 
  			php echo $nomTypeComposant[$j];
			php echo $printTypeComposant[$j];
			php echo $numTypeComposant[$j];
			php echo $_POST['choix'][$j]; -->
			<?php echo $_SESSION['nomTypeComposant'][$j];
								
			;?>
	  			<?php 		
	  			if ($printTypeComposant[$j])	{ ?>
  				<input type="checkbox" name="choix[]" value= "<?php echo $_SESSION['nomTypeComposant'][$j];?>" checked />				
  				<?php } else { ?>
  				<input type="checkbox" name="choix[]" value= "<?php echo $_SESSION['nomTypeComposant'][$j];?>" />  				
  				<?php } ?>  				
  			</td>
  		</tr>
	<?php
	$j++; 
	}
	?>
	<tr>
		<td>
			<input type="submit"  name="btSubmit"/>
		</td>			
	</tr>
<!--	<tr>
		<td>
			<br>
			<?php //echo print_r ($_POST["choix"]);?>

		</td>			
	</tr>
-->	
</form>

</table>
<!--==fin col gauche==-->

