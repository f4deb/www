<?php session_start(); ?>

<!-- Ajout d'une carte -->	
<tr class="ent"> 
	<th width="300"><?php echo "Rep Topo"; ?></th>
	<th width="300"><?php echo "Désignation"; ?></th>
</tr>		
<form action="" method="post">							
	<tr CLASS="text"  ALIGN="LEFT"> 
		<td>										
			<div>
				<input type = "text" size="25" name="repTopo" value ="1" />
			</div>
		</td>
				<td>										
			<div>
				<input type = "text" size="6" name="composant" value ="1" />
			</div>
		</td>
		<td>									
			<input type="submit" value="S&eacute;lectionner">
		</td>
	</tr>		
</form>		