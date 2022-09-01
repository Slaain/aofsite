<?php 

//mon tableau en php

function table(){
// connexion a la bdd et ma requete SQL
$user='root';
$pass='';
$db=new PDO('mysql:host=localhost;dbname=aof',$user,$pass);
$db2=$db->prepare('SELECT*FROM audiovisuel_ WHERE id_u="7"');
$db2->execute();

$f=$db2->fetchAll(PDO::FETCH_ASSOC);

//creatioon de mon tableau et des valeurs que je veux mettre dans mon tableau
$theade=["nom","_date","resume","image","avis"];
echo'<table class="table">';

for ($i=0; $i < count($theade) ; $i++) { 
    echo '<th scope="col" border="1px"  id="bye">'.$theade[$i].'</th>';
    
 }
//utilisation du foreach pour parcourir simplement mon tableau
foreach ($f as $key => $value) {


       echo'<tr><td>'.$value['nom'].'</td>';
        echo'<td>'.$value['_date'].'</td>';
        echo'<td>'.$value['resume'].'</td>';
        echo'<td><img class="image" src=" '.$value['image'].'" id="imgtab"></td>';
        echo'<td>'.$value['avis'].'</td></tr>';
        
        

}


echo'</table>';
}


