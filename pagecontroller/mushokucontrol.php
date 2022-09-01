<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");
     }
     catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
    }



//mon tableau en php qui vas me servir a créer mes pages et a récuperer la page de l'oeuvre concernées
function table(){

$user='root';
$pass='';
$db=new PDO('mysql:host=localhost;dbname=aof',$user,$pass);
$db2=$db->prepare('SELECT*FROM audiovisuel_ WHERE id_a="18"');
$db2->execute();

$f=$db2->fetchAll(PDO::FETCH_ASSOC);
//creatioon de mon tableau et des valeurs que je veux mettre dans mon tableau
echo'<table class="table">';

foreach ($f as $key => $value) {


       echo'<tr class="mol"><td><h3>Titre</h3>'.$value['nom'].'</td>';
        echo'<td><h3>Date de sortie</h3>'.$value['_date'].'</td>';
        echo'<td class="tailletext"><h3>Resume</h3>'.$value['resume'].'</td>';
        echo'<td><img class="image" src=" '.$value['image'].'" id="imgtab"></td>';
        echo'<td class="tailletext"><h3>Avis</h3>'.$value['avis'].'</td></tr>';
        
        

}


echo'</table>';
}

