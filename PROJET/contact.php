<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sucrerie Royale</title>
    </head>
    <body>
       <link rel="stylesheet" type="text/css" href="accueil.css?v=<?php echo time();?>" />
       <script type="text/javascript" src="accueil.js">
       </script>

      <?php include "haut.php";

      ?>

       <div class="droite">          
         <div id="Contact">
           <h1>Demande de Contact</h1>
           <?php /*session_destroy();*/ /*print_r($_SESSION);*/?>         
           <form id="formulaire" action="envoyermail.php" method="POST">
             <label>Nom</label>
             <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" class=<?php echo $_SESSION["nomClasse"]; ?> > <br><br>
             <script> 
              <?php 
              if($_SESSION["nomClasse"]!="erreur"){
                ?>
                document.getElementById("nom").value=<?php echo $_SESSION["nomClasse"];
              }?>
             </script>

             <label>Prénom</label>
             <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" class=<?php echo $_SESSION["prenomClasse"]; ?>> <br><br>

             <script> 
              <?php 
              if($_SESSION["prenomClasse"]!="erreur"){
                ?>
                document.getElementById("prenom").value=<?php echo $_SESSION["prenomClasse"];
              }?>
             </script>

             <label>Email</label>
             <input type="text" id="email" name="email" placeholder="email@gmail.com" class=<?php echo $_SESSION["emailClasse"]; ?>> <br><br>
             <script> 
              <?php 
              if($_SESSION["nomClasse"]!="emailClasse"){
                ?>
                document.getElementById("email").value=<?php echo $_SESSION["emailClasse"];
              }?>
             </script>
             <p style="display:inline">Genre:</p>
             <label>Homme</label>
             <input type="radio" name="genre" id="homme" value="Homme" checked="checked">

             <label>Femme</label>
             <input type="radio" name="genre" id="femme" value="Femme" class=<?php echo $_SESSION["genreClasse"]; ?>><br><br>

             <label>Date de Naissance</label>
             <input type="date" name="datenaissance" id="datenaissance" class=<?php echo $_SESSION["dateClasse"];?>> <br><br>
             <script>
              document.getElementById("datenaissance").value=<?php 
              if($_SESSION["dateClasse"]!="erreur"){
                echo $_SESSION["dateClasse"];?>
              <?php  
              }else{
                echo "undefined";}?>;
              
             </script>
             <label>Métier</label>
             <select name="selection" id="selection" class=<?php echo $_SESSION["selectionClasse"]; ?>>
              <option value="prof">Professeur</option>
              <option value="eleve">Élève</option>
              <option value="autre">Autre</option>
            </select> <br> <br>

             <label>Sujet</label>
             <input type="text"  name="sujet" id="sujet" class=<?php echo $_SESSION["sujetClasse"]; ?>> <br> <br>
             <script> 
              <?php 
              if($_SESSION["sujetClasse"]!="erreur"){
                ?>
                document.getElementById("sujet").value=<?php echo $_SESSION["sujetClasse"];
              }?>
             </script>
             

             <label>Texte</label>
             <input type="text" name="texte" id="texte" class=<?php echo $_SESSION["texteClasse"]; ?> > <br> <br>
             <script> 
              <?php 
              if($_SESSION["texteClasse"]!="erreur"){
                ?>
                document.getElementById("texte").value=<?php echo $_SESSION["texteClasse"];
              }?>
             </script>



             <input type="submit" value="Envoyer">             
             <!-- <input onclick="envoiMessage()" type="button" value="Envoyer" -->


           </form>
         </div>


       </div>




    </body>
</html>
