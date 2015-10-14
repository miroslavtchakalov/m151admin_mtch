<!DOCTYPE html>
<?php
 include './FonctionBD.php';
 if (isset($_POST["Validate"])) 
    {
     Insertion();
    }
 
    
?>
<html>
    <head>
        <title>form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="Stylesheet.css" rel="stylesheet">
    </head>
    <body>
        <div id="Container">
            <form action=form.php method="POST">
                
                <label class="divItem" for="FN">Prenom : </label><input type="text" placeholder="Prenom" name="FirstName" class="item" id="FN">
                <label class="divItem" for="LN">Nom : </label><input type="text" placeholder="Nom de Famille" name="LastName" class="item" id="LN">
                <label class="divItem" for="birth">Date de naissance :</label><input type="date" name="BirthDate" class="item" id="birth">
                <label class="divItem" for="textarea">Description :</label><textarea class="item" name="description" id="textarea"></textarea>
                <label class="divItem" for="email">Email :</label><input type="email" name="Email" class="item" id="email">
                <label class="divItem" for="Pseudo">Pseudo : </label><input type="text" name="Nickname" class="item" id="Pseudo">
                <label class="divItem" for="pass">Mot de passe : </label><input type="password" name="Password" class="item" id="pass">
                <input type="submit" name="Validate" value="Valider" class="bouttons">        
                <a href="Users.php"> Lister les utilisateurs</a>
            </form>
        </div>
    </body>
</html>
