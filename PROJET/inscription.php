
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
       <h1 >Creez votre compte!</h1>


       <form action="realiser_inscription.php" method="POST">
        <label >Identifiant</label>
        <input name="user" type="text">
        <label>Mot de Passe</label>
        <input name="password" type="password"><br><br>
        <input type="submit"> 
       </form>
       <?php 
       if($_SESSION[utilisateurUnique]==true){
        echo "Vous avez bien été enregistré, vous pouvez maintenant vous connecter";

       }else{
        echo "Cet identifiant est déjà utilisé par une autre personne";
        $_SESSION[utilisateurUnique]=true;
       }
       ?>
    </body>
</html>