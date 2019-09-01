<?php
session_start();
$_SESSION ['abc'] = array();
$_SESSION ['i'] = array();
$_SESSION ['abc'][4] = "roro";  
?>







<?php
	$maxNumTypeComposantsql = "SELECT typeComposant,printTypeComposant,numTypeComposant 
									FROM typeComposant";
											
	$requeteMaxNumTypeComposantSql=mysqli_query($db,$maxNumTypeComposantsql);
	while ($data = mysqli_fetch_array($requeteMaxNumTypeComposantSql)){
		$nomTypeComposant[] = 	$data['typeComposant'];		
		$printTypeComposant[] = $data['printTypeComposant'];	
		$numTypeComposant[] = $data['numTypeComposant'];
	}
?>

<!-- Determine le nombre de type de composant dans la base-->
<?php
	$maxNumTypeComposantsql = "SELECT numTypeComposant,typeComposant 
									FROM typeComposant 
									where numTypeComposant =
											(select max(numTypeComposant)
											from typeComposant)";
											
	$requeteMaxNumTypeComposantSql=mysqli_query($db,$maxNumTypeComposantsql);
	while ($data = mysqli_fetch_array($requeteMaxNumTypeComposantSql)){
		$totalTypeComposant = $data['numTypeComposant'];
		//echo $totalTypeComposant; //affiche le résultat					
	}
?> 

<!--==Début col gauche==-->
<table ALIGN="left" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1">
	<tr>
   	<td class="ent"  >
      	<b><i> Type </i></b>
    	</td>
	</tr>

<form action="" method="POST">
	<?php 
	$j=0;
	while($j <= $totalTypeComposant ) { 
	?>
		<tr>
  			<td>
  			<?php echo $j;?>
  			<?php echo $nomTypeComposant[$j];?>
			<?php echo $printTypeComposant[$j];?>
			<?php echo $numTypeComposant[$j];?>
			<?php echo $_POST['choix'][$j];?>
	  			<?php 		
	  			if ($printTypeComposant[$j])	{ ?>
  				<input type="checkbox" name="choix[]" value= "<?php echo $nomTypeComposant[$j];?>" checked />				
  				<?php } else { ?>
  				<input type="checkbox" name="choix[]" value= "<?php echo $nomTypeComposant[$j];?>" />  				
  				<?php } ?>  				
  			</td>
  		</tr>
	<?php
	$j++; 
	}
	?>
	<tr>
		<td>
			<input type="submit"  name="btSubmit"/>
		</td>			
	</tr>
		<tr>
		<td>
			<?php echo print_r ($_SESSION ['abc']);?>
			<br>
			<?php echo print_r ($_POST["choix"]);?>

		</td>			
	</tr>
	
</form>

</table>
<!--==fin col gauche==-->
