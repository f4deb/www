<?php session_start();?>

<?php $boardNameSelect[] = $_SESSION['boardNameSelect1'];?>


<?php
	$boardListSql = "SELECT boards,serialBoards,id_boards
							FROM boards
							
							WHERE boards ='$boardNameSelect[0]'";
	$requeteBoardListSql = mysqli_query($db,$boardListSql);
	while	($data = mysqli_fetch_array($requeteBoardListSql)){
		$idBoards = $data['id_boards'];
	} ?>

	<tr class="ent"> 

		<th width="50"><?php echo 'Rep Topo'; ?></th>
		<th width="50" colspan="2"><?php echo 'd&eacute;signation'; ?></th>
		<th width="50"><?php echo 'Empreinte'; ?></th>
		<th width="50"><?php echo 'Code'; ?></th>
	</tr>		
<!-- requete d'affichage de la liste des composants -->
<?php 
	$printBoardRequirementSql = "SELECT boardsRequirements.rep_topo,boardsRequirements.id_composant,boardsRequirements.id_boards,
											composant.valeur_composant,composant.boitier_composant
											FROM boardsRequirements,composant  
											Where boardsRequirements.id_composant = composant.id_composant 
											and boardsRequirements.id_boards = '$idBoards';
";	
	
	$requeteprintBoardRequirementSql= mysqli_query($db,$printBoardRequirementSql);
	while	($data = mysqli_fetch_array($requeteprintBoardRequirementSql)){
?>

	<tr>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['rep_topo'];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT" colspan="2">
				<?php	echo $data['valeur_composant'];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $_SESSION['nomTypeBoitier'][$data['boitier_composant']];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['id_composant'];?>
			</td>
			</tr>
<?php	} 


?>
	
	