<?php
function dbg($x)
{
    echo "<pre>";
    print_r($x);
    echo "</pre><hr>";
}
//connexion a la BDD
$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");

// demarrage de la session 
session_start();
//verification des variable definie
if(isset($_POST['pseudo']) && ($_POST['mdp']))
{
    $pseudo= htmlspecialchars($_POST['pseudo']);
    $mdp= htmlspecialchars($_POST['mdp']);
    $pass = password_hash($mdp,PASSWORD_DEFAULT);
// ma requete sql, les données que je cible 
    $check = $pdo->prepare('SELECT id_u,pseudo,mdp FROM utilisateur WHERE pseudo = ?');
    $check->execute(array($pseudo));
//recuperation de mes données
    $data = $check->fetch();
    $row= $check->rowCount();

// je compare pour savoir si le mot de passe rentrée  ceux de la BDD
    if($row == 1)
    {
        if (password_verify($mdp, $data['mdp']) == 1) {
            $_SESSION['pseudo'] = $data['pseudo'];
            $_SESSION['id_u'] = $data['id_u'];

            header("location: ../view/accueil.php");
           exit;
            print($data['pseudo']);
        } else {
            header("location: ../view/login_error.php");
            exit;
            
        }
    }if ($pass == $data['mdp'] )
    {
        header("location: ../view/accueil.php");
    } else
    {
        echo 'Mot de passe incorrect';
    }
   $check->closeCursor(); // Termine le traitement de la requête     
}else 
    

?>