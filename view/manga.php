<?php
 require_once '../controller/process_data1.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/mangastyle.css">
    <script src="../asset/js/search_anime.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Manga</title>
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
                                         <!-- la zone d'actualité  -->

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
                                <!--  fin de la zone d'actualité  -->

<section>
<h1>Notre selection des mangas du jour</h1>
     <!-- Caroussel avec 4 img -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="../page/keaton.php"><img src="../images/master.jpg" class="d-block w-100" alt="..."></a>
    </div>

    <div class="carousel-item">
    <a href="../page/century.php"><img src="../images/kenji.webp" class="d-block w-100" alt="..."></a>
    </div>

    <div class="carousel-item">
    <a href="../page/monster.php"> <img src="../images/monster.jpg" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
    <a href="../page/pluto.php"> <img src="../images/pluto.jpg" class="d-block w-100" alt="..."></a>
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
                                    <!-- barre de recherche  -->

<img src="../images/logo fire.png" class="logoback">

    	<h2 class="text-center mt-4 mb-4">Recherchez votre manga</h2>
    	<div class="row mt-5 mb-5">
    		<div class="col col-sm-2">&nbsp;</div>
    		<div class="col col-sm-8">
    			<div class="dropdown">
    				<input type="text" name="search_box" class="form-control form-control-lg" placeholder="Type Here..." id="search_box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeyup="javascript:load_data(this.value)" onfocus="javascript:load_search_history()" />
    				<span id="search_result"></span>
    			</div>
    		</div>
    	</div>    	
    </div>
    <script src="../asset/search_anime.js"></script>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>
