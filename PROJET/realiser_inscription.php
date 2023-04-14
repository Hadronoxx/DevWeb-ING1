<?php
session_start();

$f=fopen("identifiants.json", "a+");

chmod("identifiants.json",777) ;    

if (filesize==0) {
    $json_content = file_get_contents('identifiants.json');
    $data = json_decode($json_content, true);
} else {
    $data = array();
}

$existe_deja = false;
foreach ($data as $ligne) {
    if ($ligne['user'] === $_POST["user"]) {
        print_r($ligne['user']);
        $existe_deja = true;
        break;
    }
}
$data[] = array(
    'user' => $_POST['user'],
    'password' => $_POST['password']
);

if(!$existe_deja){
    $json_content = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('identifiants.json', $json_content);
    $_SESSION[utilisateurUnique]=true;

}else{
    $_SESSION[utilisateurUnique]=false;
}
header("Location:inscription.php");


 
fclose($f);
?>