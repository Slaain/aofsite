<?php 

function dbg($x)
{

    echo "<pre>";
    print_r($x);
    echo "</pre><hr>";
}
dbg($_POST);
dbg($_FILES);


//creation de mes variable de données
$n = htmlspecialchars(($_POST['nom']));
$e = htmlspecialchars(($_POST['_date']));
$p = htmlspecialchars(($_POST['resume']));
$a = htmlspecialchars(($_POST['avis']));
$m ='../images/'.$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],$m);




//connexion a la BDD
$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");
dbg($m);
//ma requete sql
$sql = "INSERT INTO audiovisuel_(`nom`, `_date`, `resume`, `avis`, `image`) VALUES (?,?,?,?,?);";
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs.
$stmt = $pdo->prepare($sql);
//j'associe mes valeurs a mes variable qui on été utilisée pour préparer la requete.
$stmt->bindValue(1,$n,PDO::PARAM_STR);
$stmt->bindValue(2,$e,PDO::PARAM_STR);
$stmt->bindValue(3,$p,PDO::PARAM_STR);
$stmt->bindValue(4,$a,PDO::PARAM_STR);
$stmt->bindValue(5,$m,PDO::PARAM_STR);

dbg($pdo);
//j'execute la requete
$stmt->execute();
print_r($stmt);
header("location:../view/profil.php");