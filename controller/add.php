<?php 

function dbg($x)
{

    echo "<pre>";
    print_r($x);
    echo "</pre><hr>";
}
dbg($_POST);

if ($_SERVER['REQUEST_METHOD'] ==='POST'){
$n = htmlspecialchars(($_POST['nom']));
$e = htmlspecialchars(($_POST['prenom']));
$p = htmlspecialchars(($_POST['pseudo']));
$mdp = htmlspecialchars(($_POST['mdp']));
$mdpconf=htmlspecialchars(($_POST['mdpConfirm']));
$pass = password_hash($mdp,PASSWORD_DEFAULT);
$m = $_POST['email'];

//connexion a la BDD
$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");
//ma requete sql
$sql = "INSERT INTO utilisateur(nom,prenom,pseudo,mdp,email) VALUES (?,?,?,?,?);";

$stmt = $pdo->prepare($sql);
//incrémenter la valeur souhaiter a la place du "?" dans la requête sql préparer
$stmt->bindValue(1,$n,PDO::PARAM_STR);
$stmt->bindValue(2,$e,PDO::PARAM_STR);
$stmt->bindValue(3,$p,PDO::PARAM_STR);
$stmt->bindValue(4,$pass,PDO::PARAM_STR);
$stmt->bindValue(5,$m,PDO::PARAM_STR);

$stmt->execute();
//permet de rediriger ma page suite a l'execution de ma requete 

    $errors = [];

    //Verification du formulaire 
    if (empty($_POST['nom'])){
        echo 'le Nom est obligatoire <br>';
    }
    if (empty($_POST['prenom'])){
        echo'Le prenom est obligatoire. <br>';
    }
    if (empty($_POST['pseudo'])){
        echo'Le pseudo est obligatoire.<br>';

    }if ( $_POST['mdp'] !== $_POST['mdpConfirm'] )
    {
        echo 'Les 2 mots de passe sont différents <br>';
        
    }if (empty($_POST['email'])){
        echo'Le email est obligatoire. <br>';

    }else{
        header("location: ../view/landing.php");
    }
}

?>