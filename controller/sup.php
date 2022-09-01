<?php 

function dbg($x)
{

    echo "<pre>";
    print_r($x);
    echo "</pre><hr>";
}

dbg($_GET);

// recuperation de l'id de l'utilisation via la methode GET dans l'url via "?chat= id url" dans la page driver
$id = $_POST['chat'];

// verifier si la valeur obtenu est la bonne
echo gettype($id);

// PDO connect sur la database
$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");

// requête SQL permettant de cibler la table USER et l'id recuperer via l'url
$sql = "DELETE FROM `audiovisuel` WHERE `id_a` = ?";

// prepare de la requete sql
$stmt = $pdo->prepare($sql);

//incrémenter la valeur souhaiter a la place du "?" dans la requête sql préparer
$stmt->bindValue(1,$id,PDO::PARAM_INT);

// execution de la requete
$stmt->execute();


//redirection
// header("location:driver.php");




?>
