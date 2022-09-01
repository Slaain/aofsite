<?php 
//une fonction dbg pour savoir si tout fonctionne
function dbg($x)
{

    echo "<pre>";
    print_r($x);
    echo "</pre><hr>";
}
dbg($_POST);
//creation de variable et associations aux données
$n = htmlspecialchars(($_POST['id_u']));
$e = htmlspecialchars(($_POST['sujet']));
$p = htmlspecialchars(($_POST['msg']));

//connexion a la BDD
$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");

//ma requete sql
$sql = "INSERT INTO reception(id_u,sujet,msg) VALUES (?,?,?);";

$stmt = $pdo->prepare($sql);
//incrémenter la valeur souhaiter a la place du "?" dans la requête sql préparer
$stmt->bindValue(1,$n,PDO::PARAM_STR);
$stmt->bindValue(2,$e,PDO::PARAM_STR);
$stmt->bindValue(3,$p,PDO::PARAM_STR);


$stmt->execute();
header("location:../view/contact.php");
//fin d'execution de ma requete
?>
