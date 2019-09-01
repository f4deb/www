<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>F4DEB</title>
        <LINK REL="stylesheet" TYPE="text/css" HREF="../../blueweb.css">
    </head>

    <body>
    <!-- ***************************************************** -->
    <!-- ********************** Entete  *********************** -->
    <!-- ***************************************************** -->
    <?php include("../../entete.php"); ?>      
      
    
    <!-- ***************************************************** -->
    <!-- ********************** Le corps ********************** -->
    <!-- ***************************************************** -->
    <div id="corps">
        <!--==Début corps de page==-->
            <section>
				<table WIDTH="940" BORDER="0" ALIGN="CENTER" CELLSPACING="0">
					<td>
                        <!--========== Menu Gauche ============-->
						<?php include ("menuGaucheHomard.php");?>
						
						<!--==========MODULE CENtrE 1===========-->
						<table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1" WIDTH="810">
							<tr>
								<td class="ent" >
									<b><i>
									    La carte CPU
									</i></b>
								</td>
							</tr>
							
							<tr>
								<td CLASS="text" WIDTH="520" ALIGN="LEFT">
									La carte CPU est &#224; base du 68HC11A1FN. Elle est compos&#233; des fonctions suivantes<BR><BR>
									- Micro-processeur (68HC11 / 8bits)<BR>
									- M&#233;moire (M48T18 /8kocts)<BR>
									- Multiplexage Data/Adresse (74HC373)<BR>
									- Chip select( GAL16V8 /Lattice)<BR>
									- 2 Buffer Bidirectionnel (74HC245)<BR>
									- 2 Buffer &#224; bascule D (74HC377)<BR>
									- Horloge (Quartz 8Mhz)<BR>
									- Reset (Cellule RC)
									<BR><BR>
									<strong>LE SYNOPTIQUE</strong>
									<BR><BR>
									<A HREF="imgsm/CPU ORG.gif" ><IMG SRC="imgsm/CPU ORG.gif" ALIGN="MIDDLE" BORDER=1 WIDTH=360 ALT="Synoptique CPU">
								</td>
							</tr>							
						</table>			
													
						<!--==========MODULE CENtrE 2===========-->
						<table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
							<tr>
								<td class="ent">
									<b><i>
										Schémas
									</b></i>
								</td>
							</tr>
							<tr>
								<td CLASS="text" WIDTH="520" ALIGN="LEFT">
									<A HREF="imgsm/CPU ICOULPA-PRINT.gif" ><IMG SRC="imgsm/CPU ICOULPA-PRINT.gif" ALIGN="MIDDLE" BORDER=1 WIDTH=160 ALT="Sch&#233;ma CPU">  <BR><BR>
									<A HREF="imgsm/PORT-PRINT.gif" ><IMG SRC="imgsm/PORT-PRINT.gif"  BORDER=1 WIDTH=160 ALT="Sch&#233;ma CPU" > 
									<A HREF="imgsm/CONNECTEUR-PRINT.gif" ><IMG SRC="imgsm/CONNECTEUR-PRINT.gif"  BORDER=1 WIDTH=160 ALT="Sch&#233;mae CPU"> 
									<A HREF="imgsm/CPU-PRINT.gif" ><IMG SRC="imgsm/CPU-PRINT.gif"  BORDER=1 WIDTH=160 ALT="Sch&#233;mae CPU">
 								</td>
							</tr>
						</table> 
      
						<!--==========MODULE CENtrE 3===========-->
						<table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
							<tr>
								<td class="ent" >
									<b><i>
									Typons
									</b></i>
								</td>
							</tr>
							<tr>
								<td CLASS="text" ALIGN="center">
									<A HREF="fichier/CPU TYPON.tar.gz" ><IMG SRC="imgsm/CPU-TYPON-COULEUR_m.gif" BORDER=1 WIDTH=160 ALT="Typons"><BR><BR>
									<a href="fichier/sm 7-12-06.s19"> Fichier programmation 68HC11 </a><BR>
									<a href="fichier/galv006.jed"> Fichier programmation GAL CPUV6 </a><BR>
									<a href="fichier/galsm001.jed"> Fichier programmation GAL SM001 </a>
									</td>
							</tr>
						</table>
					</td>				
				</table>
			</section>
		</div>
	</body>
</html>