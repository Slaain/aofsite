<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

try {
$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");
 }
 catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}
session_start();

//on recupere les données du formulaire

if(isset($_POST['sub']))
{
$login=$_SESSION["pseudo"];
$new_pass=$_POST["newMdp"];
$new_pass_conf=$_POST["mdpConfirm"];
$pass_old=$_POST["mdpOld"];

$pass_old= password_hash($pass_old,PASSWORD_DEFAULT);
$check= $pdo->prepare("SELECT * FROM utilisateur WHERE pseudo= '{$_SESSION['pseudo']}' AND mdp='$pass_old'");
$rows= $pdo->prepare($check);
if(empty($pass_old)){

    echo"Veuillez saisir votre ancien mot de passe" ;
}else if($new_pass != $new_pass_conf){
    echo"Vos nouveaux mots de passe sont differents" ;
}else if($rows ==(0)){
    echo"l'ancien mot de passe est incorrect";
}else{
    $new_pass=password_hash($new_pass);
    $sql =  "UPDATE utilisateur SET mdp = '".$new_pass."' WHERE pseudo = ' {$_SESSION['pseudo']}' ";
header("Location:../view/profil.php");
}
}

?>


