<?php session_start();?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>F4DEB</title>
        <LINK REL="stylesheet" TYPE="text/css" HREF="../blueweb.css">
    </head>

    <body>
    <!-- ***************************************************** -->
    <!-- ********************** Entete  *********************** -->
    <!-- ***************************************************** -->
    <?php include("../entete.php"); ?>      
      
    
    <!-- ***************************************************** -->
    <!-- ********************** Le corps ********************** -->
    <!-- ***************************************************** -->
    <div id="corps">
        <!--==Début corps de page==-->
            <section>
				<table WIDTH="940" BORDER="0" ALIGN="CENTER" CELLSPACING="0">
					<td>
                        <!--========== Menu Gauche ============-->
						<?php include ("menuGaucheBase.php");?>

    <!-- ***************************************************** -->
    <!-- ********************** Le corps ********************** -->
    <!-- ***************************************************** -->
    
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h2>Connexion</h2>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>