<?php
 require_once '../controller/connect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/accueil.css">
    <script src="../asset/js/driver2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Accueil</title>
</head>
<body>
                     <!-- Le header avec le logo et la barre nav -->
<header>
<img src="../images/logo_transparent.png" alt="" class="logo">

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
   
                               <!-- Zone d'actualité utilisation de bootstrap  -->


<h1 id="actu">Actualités</h1>
<div class="container">

<div class="embed-responsive embed-responsive-4by3 " >
    <iframe class="embed-responsive-item " src="https://adala-news.fr/2022/08/lanime-romantic-killer-en-teaser-video/"></iframe>
</div>
<div class="embed-responsive embed-responsive-4by3 " >
    <iframe class="embed-responsive-item" src="https://adala-news.fr/2022/08/le-roman-i-got-a-cheat-skill-in-another-world-adapte-en-anime/"></iframe>
</div>
<div class="embed-responsive embed-responsive-4by3 ">
    <iframe class="embed-responsive-item" src="https://adala-news.fr/2022/08/lanime-tsurune-saison-2-annonce/"></iframe>
</div>
<div class="embed-responsive embed-responsive-4by3 ">
    <iframe class="embed-responsive-item" src="https://adala-news.fr/2022/08/le-film-animation-jujutsu-kaisen-0-dispo-en-streaming-sur-crunchyroll/"></iframe>
</div>
</div>      
    </div>
                                             <!-- fonctionnalité ajax -->

                              <!-- fonction ajax a mettre en place <script>tiktok();</script><div id="load" tiktok()>                                        -->

                                             <!-- fonctionnalité ajax -->
<section>
    <h1>Notre selection du jour</h1>
  

                                    <!-- Caroussel avec 4 img -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="../page/heroique.php"><img src="../images/heroique.jpg" class="d-block w-100" alt="..."></a>
    </div>

    <div class="carousel-item">
    <a href="../page/century.php"><img src="../images/kenji.webp" class="d-block w-100" alt="..."></a>
    </div>

    <div class="carousel-item">
    <a href="../page/slime.php"><img src="../images/slime.jpg" class="d-block w-100" alt="..."></a>
    </div>

    <div class="carousel-item">
      <a href="../page/pluto.php"><img src="../images/pluto.jpg" class="d-block w-100" alt="..."></a>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                                    <!-- fin du carrousel -->
                                    
<h1>Dernières ajouts</h1>
                                <!-- card pour montrer les dernières ajouts  -->
<img src="../images/logo fire.png" class="logoback">
<section>
<div class="card" style="width: 18rem;">
  <img src="../images/ranking.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Le petit prince Boji doit devenir le plus grand des rois ! Une épopée adaptée du manga de Tōka Sōsuke par le studio Wit..</p>
    <p><a href="../page/ranking.php">accedez a la page </a></p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../images/moshoku.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">L'histoire nous entraine dans le quotidien d'un NEET qui vient d'être chassé de chez ses parents. Ayant le moral au plus bas, il pense au suicide.</p>
    <p><a href="../page/mushoku.php">accedez a la page </a></p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../images/red.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Uta veut créer une nouvelle ère Au cours de la diffusion en direct de l'émission, elle piège tous ceux qui écoutent sa chanson dans un monde de rêve où elle a un contrôle total..</p>
    <p><a href="../page/red.php">accedez a la page </a></p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="../images/demons.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Le groupe de Tanjirô a terminé son entraînement de récupération au domaine des papillons et embarque à présent en vue de sa prochaine mission à bord du train de l'infini.</p>
    <p><a href="../page/demon.php">accedez a la page </a></p>
  </div>
</div>

                            <!-- fin de card  -->
</section>
</div>
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
</body>
</html>
