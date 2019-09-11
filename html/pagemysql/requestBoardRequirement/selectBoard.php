<?php session_start(); ?>

<?php 

	
	//echo print_r($_SESSION['boardNameSelect1']);

	

?>

<!-- Ajout d'une carte -->	
<tr class="ent" > 
	<th width="800" colspan="4"><?php echo "Choix de la carte"; ?></th>
</tr>		
<form action="selBoard.php" method="post">							
	<tr CLASS="text"  ALIGN="RIGHT"> 
		<td colspan="2">		
			<div>																		
				<select name="nameBoard1">
					<option selected = "selected"><?php echo $_SESSION['boardNameSelect1'];?></option>
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