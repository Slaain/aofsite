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

if(isset($_POST['newMdp']) && ($_POST['mdpConfirm']))
{
$login=$_SESSION["login"];
$new_pass=$_POST["newMdp"];
$new_pass_conf=$_POST["mdpConfirm"];
$pass_old=$_POST["mdpOld"];

//onrecupère l'ancine mot de passe dans la bdd

$check= $pdo->prepare("SELECT mdp FROM utilisateur WHERE pseudo= '$login';");
//on recupere les données du formulaire
$data = $check->fetch();
$password=$pdo->prepare("SELECT mdp FROM utilisateur WHERE pseudo= '$login';");
$check->execute();
$data = $check->fetch();
// on compare si le nouveau passe correspond à la confirmation
if ($new_pass == $new_pass_conf)
{
      //on vérifie si les anciens mots de passe sont identique
    if ($password == $pass_old)
    {
        //si non on update le nouveau mot de passe dans la bdd

         $sql =  "UPDATE utilisateur SET mdp = '".$new_pass."' WHERE pseudo = ' $login ' ";
     
        echo "mot de passe change cher $login "; // là j'ai mis la variable $login pour vérifier que c'est bien la bonne personne à qui on s'adresse...
    
    }
    else
    {
        echo "Ancien mot de passe non valide";
    }
}
else
{
    echo "Mot de passe de confirmation incorrecte";
}

}

?>

























 