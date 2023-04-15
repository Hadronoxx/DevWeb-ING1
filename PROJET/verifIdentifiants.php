<?php
session_start();
$json = file_get_contents('identifiants.json');

$data = json_decode($json, true);
print_r("Valeurs du post:");
print_r($_POST);

$trouve=false;
for ($i = 0; $i < count($data); $i++) {
    if($_POST["user"]==$data[$i]["user"]&&$data[$i]["password"]==$_POST["password"]){
        echo "C'est bon";
        $trouve=true;
        $_SESSION["user"]=$_POST["user"];
        $_SESSION["password"]=$_POST["password"];
        header("Location:accueil.php");
    }
}

if(!$trouve){
    header("Location:connexion.php");
}


/* acceder au user: $data[$i]["user"] */
?>