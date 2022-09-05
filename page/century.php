<?php
require_once('../pagecontroller/centurycontrol.php');
$sql = "select * from utilisateur";
$res = $pdo->prepare($sql);
$res->execute();
$lignes = $res->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../asset/pageasset/redstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20th Century Boy</title>
</head>
<body>

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



<section id="bye">
<table  width="100%" id="bye">
<thead>
<tr>

</tr>
</thead> 
<tbody>
    <tr class="mol">
    <?php  foreach ($lignes as $l) :  ?>
    </tr>

    <?php endforeach; table()?>

    </tr>
    </tbody>

    </table>
    </section>
    </section>


    </body>
    </html>