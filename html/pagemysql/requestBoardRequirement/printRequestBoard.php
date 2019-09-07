<?php
session_start();
?>
<?php $boardNameSelect = $S_SESSION['boardNameSelect']; ?>

	<tr class="ent"> 

		<th width="50"><?php echo 'Rep Topo'; ?></th>
		<th width="50"><?php echo 'd&eacute;signation'; ?></th>
		<th width="50"><?php echo 'Code'; ?></th>
	</tr>		
<!-- requete d'affichage de la liste des composants -->
<?php
	$printBoardRequirementSql = "SELECT boardsRequirements.rep_topo,boardsRequirements.id_composant,boardsRequirements.id_boards,
											composant.valeur_composant   
											FROM boardsRequirements,composant  
											Where boardsRequirements.id_composant = composant.id_composant 
											and boardsRequirements.id_boards = '$boardNameSelect[1]';
";	
	
	$requeteprintBoardRequirementSql= mysqli_query($db,$printBoardRequirementSql);
	while	($data = mysqli_fetch_array($requeteprintBoardRequirementSql)){
?>

	<tr>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['rep_topo'];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['valeur_composant'];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['id_composant'];?>
			</td>
			</tr>
<?php	} ?>
	
	