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


    if(empty($tab["email"])){
        $_SESSION["emailClasse"]="erreur";
    }else{
        $_SESSION["emailClasse"]="'".$tab["email"]."'";;
    }
    /* TODO ca ne marche pas aled*/
    $aujourdhui= date('m-d-Y');
    $date = DateTime::createFromFormat('m-d-Y', $tab["date de naissance"]);
    if($aujourdhui>$date){
        $_SESSION["dateClasse"]="oki";
    }else{
        $_SESSION["dateClasse"]="pas oki";
    }


    if(empty($tab["sujet"])){
        $_SESSION["sujetClasse"]="erreur";
    }else{
        $_SESSION["sujetClasse"]="'".$tab["sujet"]."'";;
    }
    if(empty($tab["texte"])){
        $_SESSION["texteClasse"]="erreur";
    }else{
        $_SESSION["texteClasse"]="'".$tab["texte"]."'";;
    }

    print_r($_SESSION);

}
toutVerifier($_POST);
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