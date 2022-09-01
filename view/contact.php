<?php
 require_once '../controller/process_data.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/contactstyle.css">
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
                                    <!-- envoie de requete -->
<section>
<form action="../controller/addmessage.php" method="POST" enctype="multipart/form-data" class="formu">
<label> pseudo: </label><input type="text" name="id_u" placeholder="pseudo"><br><br>
<label> sujet: </label><input type="text" name="sujet" placeholder="sujet"><br><br>
<label> message:</label><input type="text" name="msg" placeholder="message" id="message"><br><br>
<label></label> <button type="submit" name="">envoyez</button><br>
</form>
</section>

                                      
                                  