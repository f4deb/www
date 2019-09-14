<?php session_start(); ?>



<?php //echo print_r($_SESSION['boardNameSelect1']);?>


<!-- Ajout d'une carte -->	
<tr class="ent"> 
	<th ><?php echo "Type"; ?></th>
	<th ><?php echo "boitier"; ?></th>

</tr>		
<form action="insertComposant.php" method="post">							
	<tr CLASS="text"  ALIGN="LEFT"> 
		
		<td>										
			<div>
				<select name="type">
					<option selected = "selected"><?php echo $_SESSION['typeSel'][0];?></option>
					<?php $totalTypeComposant = $_SESSION['totalTypeComposant']; $j = 0;
					while ($totalTypeComposant) {?>
						<option><?php echo $_SESSION['nomTypeComposant'][$j];?></option>				
						<?php $totalTypeComposant-- ; $j++;
					}?>																								
				</select>			
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
			<input type="submit" value="S&eacute;lectionner">
		</td>
	</tr>		
</form>		

<tr class="ent"> 
	<th ><?php echo "Rep Topo"; ?></th>
	<th ><?php echo "Désignation"; ?></th>
	<th ><?php echo "Code"; ?></th>
</tr>		
<form action="insertComposant.php" method="post">							
	<tr CLASS="text"  ALIGN="LEFT"> 
		<td>										
			<div>
				<input type = "text" size="8" name="repTopo" value ="1" />
			</div>
		</td>
		<td>										
			<div>
				<select name="composant">
					<option selected = "selected"><?php echo $_SESSION['valeurComposant'][0];?></option>
					<?php $totalTypeComposant = $_SESSION['totalTypeComposant']; $j = 1;
					while ($totalTypeComposant) {?>
						<option><?php echo $_SESSION['valeurComposant'][$j];?></option>				
						<?php $totalTypeComposant-- ; $j++;
					}?>																								
				</select>			
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
			<input type="submit" value="S&eacute;lectionner">
		</td>
	</tr>		
</form>		

<?php 


echo print_r($_SESSION['typeSel']);
echo "<BR>";
echo print_r($_SESSION['valeurComposant']);
echo "<BR>";
echo print_r($_SESSION['idTypeComposant']);
echo "<BR>";
echo print_r($_SESSION['idComposant']);



?>
