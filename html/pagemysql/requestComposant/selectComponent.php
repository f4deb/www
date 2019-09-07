<?php
session_start();
?>

<form action="addComponent.php" method="post">							
	<tr CLASS="text"  ALIGN="LEFT"> 
		<td>		
			<div>																		
				<select name="type">
					<option selected = "selected"><?php echo $_SESSION['nomTypeComposant'][0];?></option>
					<?php $totalTypeComposant = $_SESSION['totalTypeComposant']; $j = 1;
					while ($totalTypeComposant) {?>
						<option><?php echo $_SESSION['nomTypeComposant'][$j];?></option>				
						<?php $totalTypeComposant-- ; $j++;
					}?>																								
				</select>			
			</div>										
		</td>
		<td>										
			<div>
				<input type = "text" size="20"name="valeur_comp" value ="470n" />
			</div>
		</td>
		<td>
			<div>
				<select name="boitier">
					<option selected = "selected"><?php echo $_SESSION['nomTypeBoitier'][0];?></option>
					<?php $totalBoitierComposant = $_SESSION['totalBoitierComposant']; $j = 1;
					while ($totalBoitierComposant) {?>
						<option><?php echo $_SESSION['nomTypeBoitier'][$j];?></option>				
						<?php $totalBoitierComposant-- ; $j++;
					}?>					
				</select>		
			</div>
		</td>
		<td>										
			<div>
				<input type = "text" size="6" name="stock_composant" value ="1" />
			</div>
		</td>
		<td>										
			<div>
				<input type = "text" size="6" name="id_composant" value ="1" />
			</div>
		</td>
		<td>									
			<input type="submit">
		</td>
	</tr>		
</form>					