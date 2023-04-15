<?php
session_start();
/*print_r($_POST);*/
/*VERIFICATION DES DONNÉES*/

function toutVerifier(array $tab){
    if(empty($tab["nom"])){
        $_SESSION["nomClasse"]="erreur";
    }else{
        $_SESSION["nomClasse"]="'".$tab["nom"]."'";
    }


    if(empty($tab["prenom"])){
        $_SESSION["prenomClasse"]="erreur";
    }else{
        $_SESSION["prenomClasse"]="'".$tab["prenom"]."'";
    }


    if(empty($tab["email"])|| !filter_var($tab["email"], FILTER_VALIDATE_EMAIL)){
        $_SESSION["emailClasse"]="erreur";
    }else{
        $_SESSION["emailClasse"]="'".$tab["email"]."'";;
    }
    $aujourdhui= date('Y-m-d');  
    echo $tab["datenaissance"];
    if($aujourdhui>=$tab["datenaissance"]&& $tab["datenaissance"]!=null){
        echo "date Correcte";
        $_SESSION["dateClasse"]="'".$tab["datenaissance"]."'";
    }else{
        echo "date incorrecte";
        $_SESSION["dateClasse"]="erreur";
    }


    if(empty($tab["sujet"])){
        $_SESSION["sujetClasse"]="erreur";
    }else{
        $_SESSION["sujetClasse"]="'".$tab["sujet"]."'";
    }

    if(empty($tab["texte"])){
        $_SESSION["texteClasse"]="erreur";
    }else{
        $_SESSION["texteClasse"]="'".$tab["texte"]."'";
    }
    
    
    

}
toutVerifier($_POST);

/*
$to = "diegojedachercoles@gmail.com";
$subject = "test";
$message = "test";

$headers = "From: diegojedachercoles@gmail.com\r\n";
$headers .= "Content-Type: text/html\r\n";

print_r(mail($to, $subject, $message, $headers));*/

//print_r($_SESSION);

/*
 if(!toutRempli($_POST)){
    print_r("Erreur dans le formulaire");
    $_SESSION["erreurFormulaire"]=true;

 }else{
    print_r("le formulaire est bon");
    
    $_SESSION["erreurFormulaire"]=false;

 }*/
 
 
 header("Location:contact.php");

?>