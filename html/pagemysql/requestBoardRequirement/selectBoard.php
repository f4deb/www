<?php session_start(); ?>

<?php 
	$S_SESSION['boardNameSelect'] = $_POST['nameBoard'];
	$boardNameSelect = $S_SESSION['boardNameSelect'];
	$sql = "SELECT boards,id_boards
			FROM boards
			WHERE boards = '$boardNameSelect'";
     
  $requeteIdBoards = mysqli_query($db,$sql);
  
  $data = mysqli_fetch_row($requeteIdBoards);
  
	$S_SESSION['boardNameSelect'] = $data;
	
	
	//echo $S_SESSION['boardNameSelect'][0];echo'<BR>';
	//echo $S_SESSION['boardNameSelect'][1];echo'<BR>';
	

?>

<!-- Ajout d'une carte -->	
<tr class="ent" > 
	<th width="800" colspan="3"><?php echo "Choix de la carte"; ?></th>
</tr>		
<form action="" method="post">							
	<tr CLASS="text"  ALIGN="LEFT"> 
		<td>		
			<div>																		
				<select name="nameBoard"colspan="3">
					<option selected = "selected"><?php echo $S_SESSION['boardNameSelect'][0];?></option>
					<?php $totalTypeComposant = $_SESSION['totalListBoard']; $j = 1;
					while ($totalTypeComposant) {?>
						<option><?php echo $_SESSION['listBoard'][$j];?></option>				
						<?php $totalTypeComposant-- ; $j++;
					}?>																								
				</select>			
			</div>										
		</td>
		<td>									
			<input type="submit" value="S&eacute;lectionner">
		</td>
	</tr>		
</form>		