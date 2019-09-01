<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>F4DEB Motor Board</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="../blueweb.css">
  </head>

  <body>
    <!-- ***************************************************** -->
    <!-- ********************** Entete  *********************** -->
    <!-- ***************************************************** -->
    <?php include("../entete.php"); ?>      
            
    <!--==Début corps de page==-->
    <section>
      <table WIDTH="940" BORDER="0" ALIGN="CENTER" CELLSPACING="0">
        <td>
    <!--========== Menu Gauche ============-->
          <?PHP include ("menuGaucheElec.php");?>
					
    <!--========== Module Centre 1 ===========-->
          <table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="2" CELLSPACING="1" WIDTH="810">
            <tr>
              <td class="ent" >
                <b><i> Présentation de la carte </i></b>
              </td>
            </tr>					
            <tr>
              <td CLASS="text" WIDTH="520" ALIGN="LEFT">
                <BR> <p>Cette carte a été conçue afin de permettre de commander deux moteurs, et de les asservirs par l'intermédiaire de codeurs incrémentaux. 
                <BR> Elle aurra aussi une eeprom afin d'y stocker les paramètres de PID ou autres. 
                <BR> Elle sera commandé par l'intermédaire d'un port série ou du bus I2C .</p>
              </td>
            </tr>							
          </table>			
    <!--========== Module Centre 2 ===========-->
          <table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
            <tr>
              <td class="ent">
                <b><i> Schéma Fonctionnel </b></i>
              </td>
            </tr>
            <tr>
              <td CLASS="text" ALIGN="center">								
                <img SRC="imgradio/schema.jpg" ALIGN="ABSMIDDLE" vspace="5" hspace="0" BORDER=0 WIDTH=505  ALT="schema.jpg ">
              </td>
            </tr>
          </table> 
      
    <!--========== Module Centre 3 ===========-->
          <table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
            <tr>
              <td class="ent" >
                <b><i> Schéma Structurel </b></i>
              </td>
            </tr>
          </table>
                        
    <!--========== Module Centre 4 ===========-->
          <table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
            <tr>
              <td class="ent" >
                <b><i> PCB</b></i>
              </td>
            </tr>
          </table>
    
    <!--========== Module Centre 5 ===========-->
          <table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
            <tr>
              <td class="ent" >
                <b><i> 3D</b></i>
              </td>
            </tr>
          </table>
                        
    <!--========== Module Centre 6 ===========-->
          <table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
            <tr>
              <td class="ent" >
                <b><i> Nomenclature</b></i>
              </td>
            </tr>
          </table>

    <!--========== Module Centre 7 ===========-->
          <table ALIGN="right" BORDER="0" BORDERCOLORLIGHT="#788598" BORDERCOLORDARK="#CEDFE8" CELLPADDING="4" CELLSPACING="1" WIDTH="810">
            <tr>
              <td class="ent" colspan="2">
                <b><i>Test</b></i>
              </td>
            </tr>                         
            <tr>      
              <td class="test" >
                <?php echo "  1  -> Brancher le connecteur 'POWER SUPPLY' "; ?>                             
              </td>
              <td class="test" >
                <?php echo "                  => Vérifier l'allumage des Leds de contrôle 3.3V/5V/12V "; ?>            
              </td>
            </tr>
            <tr>      
              <td class="test" >
                <?php echo "  2 -> Programmer le pic avec MPLAB IPE  "; ?>                             
              </td>
              <td class="test" >
                <?php echo "                  => Vérifier le résultat de la programmation "; ?>             
              </td>
            </tr>				
            <tr>      
              <td class="test" >
                <?php echo " 3.1 -> Lancer un Terminal - 115200Bds "; ?> <BR>
                <?php echo " 3.2 -> Appuyer sur le bouton RESET"; ?>          
              </td>
              <td class="test" >
                <?php echo " => Ouvrir le port série "; ?><BR>
                <?php echo " => Vérifier l'affichage dans le Terminal des Devices programmés dans le PIC "; ?>  
              </td>
            </tr>
            <tr>      
              <td class="test" >
                <?php echo "4 -> Dans le Terminal, lancer la commande SN"; ?>
              </td>
              <td class="test" >
                <?php echo " => Le nom de la carte s'affiche dans le terminal"; ?>        
              </td>
            </tr>
          </table>
        </td>				
      </table>
    </section>
  </body>
</HTML>


