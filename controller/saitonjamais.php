<?php
function dbg($x)
{

    echo "<pre>";
    print_r($x);
    echo "</pre><hr>";
}
//connexion a la BDD
$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");

//requetesql


// Validation du formulaire


session_start();

if(isset($_POST['pseudo']) && ($_POST['mdp']))
{
    $pseudo= htmlspecialchars($_POST['pseudo']);
    $pass= htmlspecialchars($_POST['mdp']);

    $check = $pdo->prepare('SELECT id_u,pseudo,mdp FROM utilisateur WHERE pseudo = ?');
    $check->execute(array($pseudo));
    $data = $check->fetch();
    $row= $check->rowCount();
    // echo "le mdp haché vaut : ".$data['mdp']."et le mdp clair est :".$pass;


// dbg($_POST);

    if($row == 1)
    {
        if (password_verify($pass, $data['mdp']) == 1) {
            $_SESSION['pseudo'] = $data['pseudo'];
            $_SESSION['id_u'] = $data['id_u'];

            header("location: ../view/accueil.php");
           exit;
            print($data['pseudo']);
        } else {
            echo "<script>alert(\"le mot de passe inséré ou le pseudo n'est pas valide\")</script>";
            exit;
            echo "coucou";
        }
    }if ($pass == $data['mdp'] )
    {
         echo 'Menu general';
    } else
    {
        echo 'Mot de passe incorrect';
    }
   $check->closeCursor(); // Termine le traitement de la requête     
}else 
    

?>


<?php 

//mon tableau en php

function table(){
// connexion a la bdd et ma requete SQL
$user='root';
$pass='';
$login=$_SESSION["pseudo"];
$db=new PDO('mysql:host=localhost;dbname=aof',$user,$pass);

if(!isset($login)){
session_start();}

$db2=$db->prepare("SELECT*FROM audiovisuel WHERE id_a='7' ");
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


