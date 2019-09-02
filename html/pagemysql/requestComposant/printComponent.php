<?php
session_start();
?>

<!-- Determine le nombre de type de composant dans la base-->
<?php
	$maxNumTypeComposantsql = 'SELECT numTypeComposant 
									FROM typeComposant 
									where numTypeComposant =
											(select max(numTypeComposant)
											from typeComposant)';
											
	$requeteMaxNumTypeComposantSql=mysqli_query($db,$maxNumTypeComposantsql);
	while ($data = mysqli_fetch_array($requeteMaxNumTypeComposantSql)){
		$totalTypeComposant = $data['numTypeComposant'];
		//echo $totalTypeComposant; //affiche le résultat											
	}
?>



<!-- Boucle pour afficher la liste des composants -->
<?php 
$k=0;
while ($k <= $totalTypeComposant) {  ?>





<!-- requete de selection du type de composant à afficher -->
<?php

	$printNumTypeComposantSql = "SELECT numTypeComposant,typecomposant,printTypeComposant 
									FROM typeComposant
									WHERE numTypeComposant = $k";	
	
	$requetePrintNumTypeComposantSql= mysqli_query($db,$printNumTypeComposantSql);
	while	($data = mysqli_fetch_array($requetePrintNumTypeComposantSql)){
		
		$strNumTypeComposant = $data['typecomposant'];
		$i = $data['numTypeComposant'];
		$totalNumTypeComposant = $data['printTypeComposant'];
	} ?>
	



<!-- requete d'affichage de la liste des composants -->

<?php 
if ($totalNumTypeComposant == 1) { ?>

<?php
	$printComposantSql = "SELECT id,boitier_composant,valeur_composant,id_typeComposant,stock_composant,id_composant 
									FROM composant 
									where id_typecomposant = $i";	
	
	$requete = mysqli_query($db,$printComposantSql);
	while	($data = mysqli_fetch_array($requete)){
?>
		<tr>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $strNumTypeComposant;?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['valeur_composant'];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $_SESSION['nomTypeBoitier'][$data['boitier_composant']];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['stock_composant'];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['id_composant'];?>
			</td>
	<?php	} ?>
	
	</tr>

	
	

	<?php }$k++;
	
	} ?>





















