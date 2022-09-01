<?php
 require_once '../controller/connect.php'; 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/landing.css">
    <title>login</title>
</head>
                <!-- logo, formulaire de connexion et bouton de connexion pour accer au site ou s'inscrire  -->
<img src="../images/logo_transparent.png" alt="" class="logo">

<form action="../controller/connect.php" method="POST" enctype="multipart/form-data" class="formu">

<label> pseudo: </label><input type="text" name="pseudo" placeholder="pseudo"><br><br>

<label>password:</label> <input type="password" name="mdp" placeholder="password"><br><br>

<label></label> <button type="submit" name="">connexion</button><br>

<label></label><button><a href="inscription.php">inscription</a></button>

</form>

<body>

</body>
</html>