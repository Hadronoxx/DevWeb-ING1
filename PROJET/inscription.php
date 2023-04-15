
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page d'inscription</title>
    </head>
    <body>
       <link rel="stylesheet" type="text/css" href="connexion.css?v=<?php echo time();?>" />
       <script type="text/javascript" src="accueil.js">

       </script>
       <div id="Inscription">
        <h1 >Creez votre compte!</h1>


        <form action="realiser_inscription.php" method="POST">
            <label >Identifiant</label>
            <input name="user" type="text" required>
            <label>Mot de Passe</label>
            <input name="password" type="password" required><br><br>
            <input type="submit"> 
        </form>

        <a href="accueil.php">Retour à la page d'accueil</a>
        <?php 
        if($_SESSION[utilisateurUnique]==true){
        }else{
            echo "Cet identifiant est déjà utilisé par une autre personne";
            $_SESSION[utilisateurUnique]=true;
        }
        ?>
       </div>
    </body>
</html>