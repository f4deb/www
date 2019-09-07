<tr class="ent"> 
	<th width="300"><?php echo "Carte à créer"; ?></th>
	<th width="150"><?php echo "Numéro de série"; ?></th>
</tr>		

<form action="createBoard.php" method="post">
	<tr CLASS="text"  ALIGN="LEFT"> 
		<td>		
			<div>
				<input type = "text" size="20"name="nameBoard" value ="xxx" />
			</div>										
		</td>
		<td>										
			<div>
				<input type = "text" size="20"name="serialBoard" value ="xxx" />
			</div>
		</td>
		<td>									
			<input type="submit">
		</td>
	</tr>		
</form>
<!-- Ajout d'une carte -->	
<tr class="ent"> 
	<th width="300"><?php echo "Choix de la carte"; ?></th>
	<th width="150"><?php echo "Numéro de série"; ?></th>
</tr>		
<form action="addBoard.php" method="post">							
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
			<div>
				<input type = "text" size="20"name="serialBoard" value ="xxx" />
			</div>
		</td>
		<td>									
			<input type="submit">
		</td>
	</tr>		
	<tr class="ent"> 
		<th width="300"><?php echo "Nom de la carte"; ?></th>
		<th width="150"><?php echo "Numéro de série"; ?></th>
	</tr>		
</form>		