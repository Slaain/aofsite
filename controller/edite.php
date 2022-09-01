<?php 



$id = $_GET['chat'];

var_dump($_GET);
echo $id;

$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");


$sql = "SELECT * FROM utilisateur WHERE id = ?";


$stmt = $pdo->prepare($sql);

$stmt->bindValue(1,$id,PDO::PARAM_INT);

$ligne = $stmt->fetch(PDO::FETCH_OBJ);


dbg($ligne);


?>
