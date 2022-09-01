<?php
require_once '../controller/changer_mdp.php'; 
require_once '../controller/tableau.php'; 

$pdo = new PDO("mysql:host=localhost;dbname=aof", "root", "");
$sql= "select * from utilisateurs";
$res = $pdo->prepare($sql);
$res->execute();
$lignes = $res->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/profilstyle.css">
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/jquery.min.js"></script>
    <title>Profil</title>
</head>
<body>
                     <!-- Le header avec le logo et la nav -->
<header>

<a href="../view/accueil.php"><img src="../images/logo_transparent.png" alt="" class="logo"></a>

<nav>
    <ul class="list">
        <li><a href="../view/manga.php">Manga</a></li>
        <li><a href="../view/anime.php">Anime</a></li>
        <li><a href="../view/filma.php">Film <br>d'animation</a></li>
        <li><a href="../view/profil.php">profil</a></li>
        <li><a href="../view/contact.php">contact</a></li>
    </ul>
</nav>
</header>

                                     <!-- fin du header  -->
                                    <!-- envoie de requete -->
<section>

     <button id="debut"class="but">Changez votre mot de passe </button>
 
       <form class=chatform method="POST" action="../controller/changer_mdp.php" id="fin">
      <p>
      <label for="pseudo">Votre nouveau mot de passe :</label>
      <input type="password" name="newMdp" id="mdp" required/>
      <br/>
      <label for="pseudoConfirm">Retapez votre nouveau mot de passe :</label>
      <input type="password" name="mdpConfirm" id="mdpConfirm" required/>
      <br/>
      <label for="oldMdp">Ancien mot de passe:</label>
      <input type="password" name="mdpOld" id="mdpOld" required/>
      <br/>
     <input type="submit" value="Changer mon mot de passe">
     </form>

   
 <button id="start" class="but">Proposez une oeuvre</button>
    <form class=chatform method="POST" action="../controller/addoeuvre.php" id="end" enctype="multipart/form-data">
      <p>
      photo : <input type="file" name="file"><br><br>
      <label for="nom">Titre</label><input type="text" name="nom" id="nom" required/>
      <br/>
      <label for="_date">Date de sortie:</label><input type="date" name="_date" id="date" required/>
      <br/>
      <label for="resume">resume:</label><input type="text" name="resume" id="resume" required/>
      <br/>
      <label for="avis">Dites nous ce que vous en avez pensée:</label><input type="text" name="avis" id="avis" required/>
      <br/>
     <button type="submit" name="sub" value="Validez" id="sub">Envoyez </button>
     </form>

    <button id="now" class="but">Voir mes oeuvres</button>
<section id="bye">
    <table border="1px" width="100%" id="bye">
        <thead>
            <tr>
            </tr>
        </thead> 
        <tbody>
            <tr>
                <?php  foreach ($lignes as $l) :  ?>
            <tr>

                <td><?php echo $l['id_a']; ?></td>
                <td><?php echo $l['nom']; ?></td>
                <td><?php echo $l['_date']; ?></td>
                <td id="imgtab" ><img style="height: 100px;" src="<?php echo $l['images'] ; ?>" alt="" ></td>
                <td><?php echo $l['resume']; ?></td>
                <td><a href="../controller/sup.php?chat=<?php echo $l['id_a']; ?>">Supprimer</a></td>
                <td><a href="../controller/edite.php?chat=<?php echo $l['id_a']; ?>">Editer</a></td>
            </tr>

        <?php endforeach; table()?>

        </tr>
        </tbody>
  
                </table>
                </section>
</section>
                                        <!-- le footer avec une mini nav et les reseaux  -->
                                        <footer>
<ul class="navfoot" >
        <li><a href="../view/accueil.php" class="log">Accueil</a></li>
        <li><a href="../view/profil.php" class="log">Profil</a></li>
        <li><a href="../view/contact.php" class="log">Contact</a></li>
    </ul>
    <div class="card text-center footer" style="background-color: transparent; margin-top: 2%;">
    <div class="card-header">
      Reseaux
    </div>
    <div  class="log">
        <a href=""><img class=log src="../images/instagram.png" alt="instagram"></a>
        <a href=""><img class=log src="../images/fb.png" alt="fb"></a>
        <a href=""><img class=log src="../images/twitter.png" alt="twitter"> </a>

    </div>
  </div>
 <p>Copyright &copy; 2022 Anime On Fire &#x2759; Powered by 99Concepts</p> 
</footer>

<script src="../asset/js/driver2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="../asset/js/formulairejs.js"></script>

</body>                                     
              