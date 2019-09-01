<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>F4DEB APRS</title>
        <LINK REL="stylesheet" TYPE="text/css" HREF="../blueweb.css">
    </head>

    <body>
    <!-- ***************************************************** -->
    <!-- ********************** Entete  *********************** -->
    <!-- ***************************************************** -->
    <?php include("../entete.php"); ?>      
            
			 <!--==Début corps de page==-->
            
			 <!--==Début corps de page==-->
            <section>
				<table WIDTH="940" BORDER="0" ALIGN="CENTER" CELLSPACING="0">
					<td>
                        <!--========== Menu Gauche ============-->
                            <?PHP include ("menuGaucheRadio.php");?>
						
						<!--==========MODULE CENtrE 1===========-->
						<table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1" WIDTH="810">
							<tr>
								<td class="ent" >
									<b><i>
									APRS
									</i></b>
								</td>
							</tr>
							
							<tr>
								<td CLASS="text" WIDTH="520" ALIGN="LEFT">
									<BR>
                                    <?PHP echo "Ma station APRS est constituée d une antenne omnidirectionnelle VHF, d un TALCO CS160 20W de sortie pour la partie radio.";?><BR><BR>
                                    <?PHP echo "Pour la partie décodage, j utilise une interface audio personnelle connectée à un Raspberry PI 2";?><BR><BR>
                                    <?PHP echo "Le décodage est réalisé  par DIREWOLF et l interface graphique géré par XASTIR";?><BR><BR>
                                </td>
							</tr>							
						</table>			
                        
						<!--==========MODULE CENtrE 2===========-->
						<table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
							<tr>
								<td class="ent" >
									<b><i>
									Photos
									</b></i>
								</td>
							</tr>
							<tr>
								<td CLASS="text" ALIGN="center">
								    <IMG SRC="imgRadio/APRS1.jpg" ALIGN="ABSMIDDLE" vspace="5" hspace="0" BORDER=0 WIDTH=505  ALT=".JPG ">
									<IMG SRC="imgRadio/APRS2.jpg" ALIGN="ABSMIDDLE" vspace="5" hspace="0" BORDER=0 WIDTH=505  ALT=".JPG ">
   									<IMG SRC="imgRadio/APRS3.jpg" ALIGN="ABSMIDDLE" vspace="5" hspace="0" BORDER=0 WIDTH=505  ALT=".JPG ">

								</td>
							</tr>
						</table>
                        <!--==========MODULE CENtrE 3===========-->
						<table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1" WIDTH="810">
							<tr>
								<td class="ent" >
									<b><i>
                                    DireWolf installation
									</i></b>
								</td>
							</tr>
							
							<tr>
								<td CLASS="text" WIDTH="520" ALIGN="LEFT">
									<BR>
                                    <?PHP echo "Afin d avoir  une version récente et facilement modifiable, nous allons installer puis compiler simplement DireWolf.";?><BR>
                                    <?PHP echo 'Je tiens à rassurer ceux pour qui le mot "Compiler" semble barbare, quelques lignes de commandes tester et efficaces suffieront.';?><BR><BR>
                                    <u><i>
                                    <?PHP echo "Voici l'installation sous Raspbian pour Raspberry que je recommande";?><BR><BR>
                                    </i></u>
                                    
                                    <b><i>
                                    <?PHP echo "cd ~";?><BR>
                                    <?PHP echo "git clone https://www.github.com/wb2osz/direwolf";?><BR>
                                    <?PHP echo "cd direwolf";?><BR>
                                    <?PHP echo "make";?><BR>
                                    <?PHP echo "sudo make install";?><BR>
                                    <?PHP echo "make install-conf";?><BR>
                                    </i></b>
                                </td>
							</tr>							
						</table>			
					</td>				
				</table>
                
			</section>
		</div>
	</body>
</HTML>


