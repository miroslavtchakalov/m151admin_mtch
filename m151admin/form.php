<?php
 require('Connexion.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="Stylesheet.css" rel="stylesheet">
    </head>
    <body>
        <div id="Container">
            <form action="form.html" method="POST">
                
                <div class="divItem">Prenom : <input type="text" placeholder="Prenom" name="FirstName" class="item"></div>
                <div class="divItem">Nom : <input type="text" placeholder="Nom de Famille" name="LastName" class="item"></div>
                <div class="divItem">Date de naissance :<input type="date" name="BirthDate" class="item"></div>
                <div class="divItem">Description :<textarea class="item"></textarea></div>
                <div class="divItem">Email :<input type="email" name="Email" class="item"></div>
                <div class="divItem">Pseudo : <input type="text" name="Nickname" class="item"></div>
                <div class="divItem">Mot de passe : <input type="password" name="Password" class="item"></div>
                <input type="submit" name="Validate" value="Valider" class="bouttons">  
                <input type="button" name="Delete" value="Effacer" class="bouttons">         
                
            </form>
        </div>
    </body>
</html>
