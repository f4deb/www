<?php
session_start();


	$onglet = $_SESSION['numeroOnglet'];  
	


	

    // connect to db
    $db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');
           
	if($onglet == 1){
		
		$sql='SELECT id,boitier_composant,valeur_composant,id_typeComposant,stock_composant,id_composant FROM composant';


		$requete = mysqli_query($db,$sql);
		$data = mysqli_fetch_array($requete);
	}
	elseif($onglet == 2) {$onglet = 'tata';}
	elseif($onglet == 3) {$onglet = 'titi';}
	else{$onglet = 'pas de selection valide';};
	   
           
?>

<!DOCTYPE html>
<html>
    <head>
        <title>F4DEB Base de donnée;</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <LINK REL="stylesheet" TYPE="text/css" HREF="../blueweb.css">
    </head>
    
    <body>
		<?php	include("../entete.php");?>
    
    
    	<div id="body">
        <!--==Début corps de page==-->
      	<section>
				<table WIDTH="1200" BORDER="0" ALIGN="CENTER" CELLSPACING="0">
					<td> 
						<!--==========MODULE ONGLETS ===========-->
						<table ALIGN="center" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1" WIDTH="810">
							<tr>
								<td class="ent" >
									<b><i>
									 Base de donnée
									</i></b>
								</td>
							</tr>
							
							<tr>
								<td CLASS="text" ALIGN="CENTER">
									<div id="menu">
	  									<ul id="onglets">
											<li><a href="shop1.php" >Composants </a></li>		
    										<li><a href="shop2.php" >Cartes </a></li>		
    										<li><a href="shop3.php" >Consommation </a></li>		
  					
  										</ul>  					
									</div>
								</td>
							</tr>		
						</table>			
						
						
<!-- ******************************************************* -->						
<!-- ******************* ONGLET COMPOSANTS ***************** -->
<!-- ******************************************************* -->
						<?php if($onglet == 1){ ?>	

<table border="10" align ="left" >
<td>

						<table border="0" align ="center" >
						<tr>						
						<td>
							<?php include ("menuGaucheBase.php");?>
						</td>
						</tr>		
						</table>			
</td>									
<td>						
						<table border="0" align ="center" >		
					
						
							<tr>
							<td>
						
							<thead>					
								<tr class="ent">
									<td class="ent" colspan="6">
										<br>
										<b><i>
										 Liste des composants
										 <br>
										</i></b>
										<br>
									</td>	
								</tr>	
							</thead>	
							<tbody>
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
														}
													?>
													
														
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
														}
													?>					
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
									<tr class="ent"> 
										<th width="100"><?php echo Type; ?></th>
										<th width="250"><?php echo valeur; ?></th>
										<th width="100"><?php echo boitier; ?></th>
										<th width="50"><?php echo stock; ?></th>
										<th width="50"><?php echo code; ?></th>
										<th width="50"><?php echo valide; ?></th>
									</tr>		
								</form>									
										
							<!-- --------------------------------- -->	
							<!--  Affiche la liste des composants  -->
							<!-- --------------------------------- -->				

								
								<?php include './requestComposant/printComponent.php' ?>								
								
							</tbody>
							</td>
							

						
						</tr>							
						<?php } ?>
						</table>
</td>						
<!-- ******************************************************* -->
<!-- ******************************************************* -->
<!-- ******************************************************* -->		

					</td>				
				</table>
			</section>
   	</div>
	</body>
</html>
