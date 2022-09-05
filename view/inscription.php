<?php
 require_once '../controller/connect.php'; 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/inscrip.css">
    <script src="../asset/js/validland.js"></script>
    <title>login</title>
</head>
<body>
                    <!-- formulaire d'inscription pour avoir accès au site  -->
<img src="../images/logo_transparent.png" alt="" class="logo">
<form action="../controller/add.php" method="POST" enctype="multipart/form-data" class="formu">


<label> nom: </label>
    <input type="text" name="nom" placeholder="nom">
<br><br>



<label> prénom: </label><input type="text" name="prenom" placeholder="prenom" required="required"><br><br>
<label> pseudo: </label><input type="text" name="pseudo" placeholder="pseudo" required="required"><br><br>
<label>Mot de passe:</label> <input type="password" name="mdp" placeholder="Mot de passe" required="required"><br><br>
<label>Retapez votre Mot de passe:</label> <input type="password" name="mdpConfirm" placeholder="Mot de passe" required="required"><br><br>
<label>email:</label> <input type="email" name="email" placeholder="email" required="required"> <br><br>
<label></label> <button type="submit" name="" required="required">inscription</button><br>
</form>  

<script src="../asset/js/validland.js"></script>
</body>
</html>