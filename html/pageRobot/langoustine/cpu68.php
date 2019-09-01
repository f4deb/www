<!DOCTYPE html>
<html>
<HEAD>
	<TITLE>F4DEB</TITLE>
	<meta http-equiv="Content-type" content="text/html; charset=ISO-8859-15">
	<title>F4DEB</title>
	<meta name="description" lang="fr" content="Radioamateur,robotique">
	<meta name="keywords" content="electronique,pic32,radio amateur'">
	<meta name="author" lang="fr" content="f4deb">
	<meta name="Revisit-after" CONTENT="30 days">
	<link rel="home" title="Accueil" href="f4deb.free.fr">
	<link rel="author" title="Contact" href="f4deb@free.fr"> 
	<LINK REL="stylesheet" TYPE="text/css" HREF="../../blueweb.css">
</HEAD>

<body>
	    <div id="bloc_page">
            <div id="banniere_image"  >
                <div id="banniere_description">			
					<nav>
						<ul>
							<li><A HREF="../../index.html" CLASS="">Accueil</a></li>
							<li><a href="../../pageradio/presentation.htm" CLASS="">Radio</a></li>
							<li><a href="../presentation.htm">Robot</a></li>
							<li><a href="../../pageelec/presentation.htm">Electronique</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>
				</div>
            </div>
            
			 <!--==Début corps de page==-->
            <section>
				<table WIDTH="940" BORDER="0" ALIGN="CENTER" CELLSPACING="0">
					<td>
						<!--==Début col gauche==-->
						<table ALIGN="left" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1" WIDTH="110">
							<tr>
								<td class="ent"  >
									<b><i>
									Le Homard
									</i></b>
								</td>
							</tr>
							<tr><td><A HREF="acceuilsousmarin.htm" CLASS="menu">&nbsp; Pr&#233;sentation</A></td></tr>
							<tr><td><A HREF="modem.htm" CLASS="menu">&nbsp; Modem</A></td></tr>
							<tr><td><A HREF="commande moteur.htm" CLASS="menu">&nbsp; Puissance</A></td></tr>
							<tr><td><A HREF="cpu68.htm" CLASS="menu">&nbsp; CPU 68HC11</A></td></tr>
							<tr><td><A HREF="" CLASS="menu">&nbsp; La trappe</A></td></tr>
							<tr><td><A HREF="" CLASS="menu">&nbsp; Moteurs</A></td></tr>
							<tr><td><A HREF="" CLASS="menu">&nbsp; Ballastes</A></td></tr>
							<tr><td><A HREF="" CLASS="menu">&nbsp; Batterie</A></td></tr>
							<tr><td><A HREF="" CLASS="menu">&nbsp; Radio</A></td></tr>
							<tr><td><A HREF="" CLASS="menu">&nbsp; Datasheet</A></td></tr>						</table>
						<!--==fin col gauche==-->
						
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