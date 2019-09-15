<?php session_start(); ?>



<?php //echo print_r($_SESSION['boardNameSelect1']);?>


<!-- Ajout d'une carte -->	
<tr class="ent"> 
	<th ><?php echo "Type"; ?></th>
	<th ><?php echo "boitier"; ?></th>

</tr>

<!-- Selection du type et du boitier -->		
<form action="footprintSelect.php" method="post">							
	<tr CLASS="text"  ALIGN="LEFT"> 
		
		<td>										
			<div>
				<select name="type">
					<option selected = "selected"><?php echo $_SESSION['typeSel'][0];?></option>
					<?php $totalTypeComposant = $_SESSION['totalTypeComposant']+1; $j = 0;
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
					<option selected = "selected"><?php echo $_SESSION['typeBoitier'][0];?></option>
					<?php $totalBoitierComposant = $_SESSION['totalBoitierComposant']+1; $j = 0;
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






<!-- Selection du repere topo et de la désignation -->
<tr class="ent"> 
	<th ><?php echo "Rep Topo"; ?></th>
	<th colspan="2" ><?php echo "Désignation"; ?></th>

</tr>		
<form action="componentSelect.php" method="post">							
	<tr CLASS="text"  ALIGN="CENTER"> 
		<td>										
			<div>
				<input type = "text" size="8" name="repTopo" value ="" />
			</div>
		</td>
		<td colspan="2" ALIGN="CENTER">										
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
			<input type="submit" value="S&eacute;lectionner">
		</td>
	</tr>		
</form>		








<!--  -->
<tr class="ent"> 
	<th ><?php echo "Rep Topo"; ?></th>
	<th colspan="2"><?php echo "Désignation"; ?></th>
	<th ><?php echo "Empreinte"; ?></th>
	<th ><?php echo "Code"; ?></th>	

</tr>	
						
	<tr CLASS="text"  ALIGN="LEFT"> 
		<td ALIGN="CENTER">										
			<div>
				<?php echo $_SESSION['repTopoSelect']; ?>	
			</div>
		</td>
		<td colspan="2">										
			<div>
				<?php echo $_SESSION['valueComponent']; ?>	
			</div>
		</td>
		<td>										
			<div>
				<?php echo $_SESSION['typeBoitier'][0]; ?>	
			</div>
		</td>
		<td>										
			<div>
				<?php echo "12345678"; ?>	
			</div>
		</td>

		<td>									
			<input type="submit" value="Valider">
		</td>
	</tr>		



<?php 


//echo print_r($_SESSION['typeSel']);
//echo "<BR>";
//echo print_r($_SESSION['valeurComposant']);
//echo "<BR>";
//echo print_r($_SESSION['nomTypeBoitier']);
//echo "<BR>";
//echo print_r($_SESSION['idComposant']);



?>
