
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Page de connexion</title>
    </head>
    <body>
       <link rel="stylesheet" type="text/css" href="connexion.css?v=<?php echo time();?>" />
       <script type="text/javascript" src="accueil.js">

       </script>
       <h1 >Connexion</h1>

       <form action="verifIdentifiants.php" method="POST">
        <label >Identifiant</label>
        <input name="user" type="text">
        <label>Mot de Passe</label>
        <input name="password" type="password"><br><br>
        <input type="submit"> 
       </form>
    </body>
</html>
