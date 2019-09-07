<?php session_start(); ?>

<!-- Ajout d'une carte -->	
<tr class="ent"> 
	<th width="300"><?php echo "Choix de la carte"; ?></th>
</tr>		
<form action="" method="post">							
	<tr CLASS="text"  ALIGN="LEFT"> 
		<td>		
			<div>																		
				<select name="nameBoard">
					<option selected = "selected"><?php echo $_SESSION['listBoard'][0];?></option>
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