<?php
session_start();
?>


<!-- *************************************************** -->
<!-- *************************************************** -->
<!-- ********** Requete pour la page Board ************* -->
<!-- *************************************************** -->
<!-- *************************************************** -->
<?php
$boardListSql = "SELECT boards,serialBoards,id_boards
						FROM boards";
$requeteBoardListSql = mysqli_query($db,$boardListSql);
	while	($data = mysqli_fetch_array($requeteBoardListSql)){
?>
		<tr>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['boards'];?>
			</td>
			<td CLASS="text"  ALIGN="LEFT">
				<?php	echo $data['serialBoards'];?>
			</td>

	<?php	} ?>
	
	</tr>