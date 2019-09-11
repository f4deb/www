<?php
session_start();
    // connect to db
    $db = mysqli_connect($_SESSION['hote'], $_SESSION['utilisateur'], $_SESSION['mdppass'],$_SESSION['nom_base'])

           or die('could not connect to database');          
?>

<?php

if($_SESSION['numeroOnglet'] == 1){ 

}

// listing des cartes,numéro de série et id des cartes
if($_SESSION['numeroOnglet'] == 2){ 
	$listBoardSql = "SELECT boards,serialBoards,id_boards
							FROM boards
							GROUP By id_Boards";
	$requestListBoard = mysqli_query($db,$listBoardSql);
	while ($data = mysqli_fetch_array($requestListBoard)){
		$listBoard[] = $data['boards'];
		$_SESSION['listBoard'] = $listBoard;
	}
	
	
	$maxBoardList = "SELECT id_boards 
								FROM boards
								GROUP By id_Boards";	
	$requestMaxBoard = mysqli_query($db,$maxBoardList);
	$_SESSION['totalListBoard'] = mysqli_num_rows($requestMaxBoard)-1;
}

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
											<li><a href="shop/shop1.php" >Components </a></li>		
    										<li><a href="shop/shop2.php" >Boards </a></li>		
    										<li><a href="shop/shop3.php" >Board Requirement </a></li>		
  											<li><a href="shop/shop4.php" >Consommation </a></li>	
  										</ul>  					
									</div>
								</td>
							</tr>		
						</table>			
						
						
<!-- ******************************************************* -->						
<!-- ******************* ONGLET COMPOSANTS ***************** -->
<!-- ******************************************************* -->
						<?php if($_SESSION['numeroOnglet'] == 1){ ?>	

						<table border="1" align ="center" >
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
														<b><i>Liste des composants<br></i></b>
														<br>
													</td>	
												</tr>	
											</thead>	
											<tbody>
														<?php include './requestComposant/selectComponent.php';?>		
										
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
						</table>						

<!-- ******************************************************* -->						
<!-- ******************* ONGLET BOARDS ***************** -->
<!-- ******************************************************* -->
						<?php if($_SESSION['numeroOnglet'] == 2){ ?>	

						<table border="1" align ="center" >														
							<td>						
								<table border="0" align ="center" >											
									<tr>
										<td>				
											<thead>					
												<tr class="ent">
													<td class="ent" colspan="3">
														<br>
														<b><i>Liste des Boards<br></i></b>
														<br>
													</td>	
												</tr>	
											</thead>	
											<tbody>
<!-- --------------------------------- -->	
<!-- ------- création d'une carte ---- -->
<!-- --------------------------------- -->																				
										
												<?php include './requestBoard/selectBoard.php' ?>
										
<!-- --------------------------------- -->	
<!----  Affiche la liste des Boards  ---->
<!-- --------------------------------- -->				
												<?php include './requestBoard/printBoard.php' ?>								
											</tbody>
										</td>						
									</tr>							
									<?php } ?>
								</table>
							</td>	
						</table>						

<!-- ******************************************************* -->						
<!-- ************** ONGLET BOARDS REQUIREMENTS ************* -->
<!-- ******************************************************* -->
						<?php if($_SESSION['numeroOnglet'] == 3){ ?>	

						<table border="1" align ="center" >														
							<td>						
								<table border="0" align ="center" >											
									<tr>
										<td>				
											<thead>					
												<tr class="ent">
													<td class="ent" colspan="6">
														<br>
														<b><i>Nomenclature des Boards<br></i></b>
														<br>
													</td>	
												</tr>	
											</thead>	
											<tbody>
<!-- --------------------------------- -->	
<!-- ------ Sélection d'une carte ---- -->
<!-- --------------------------------- -->															
												<?php include './requestBoardRequirement/selectBoard.php' ?>
												
<!-- --------------------------------- -->	
<!-- ------ Sélection d'une carte ---- -->
<!-- --------------------------------- -->															
												<?php include './requestBoardRequirement/addNomenclature.php' ?>											
																			
<!-- --------------------------------- -->	
<!----  Affiche la liste des Boards  ---->
<!-- --------------------------------- -->				
												<?php include './requestBoardRequirement/printRequestBoard.php' ?>								
											</tbody>
										</td>						
									</tr>							
									<?php } ?>
								</table>
							</td>	
						</table>		


					
					</td>				
				</table>
			</section>
   	</div>
	</body>
</html>
