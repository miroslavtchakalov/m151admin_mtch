<?php
require_once './FonctionBD.php';
$pseudo = isset($_POST['nickname']) ? $_POST['nickname'] : "";
if (isset($_POST["Validate"])) {
    $loginResult = login($_POST['nickname'], $_POST['pass']);

    if (!$loginResult) {
        echo "nom d'utilisateur ou mot de passe faux";
    } else {
        $_SESSION['userLogged'] = $loginResult;
        header('Location:./PageUtilisateur.php');
    }
}
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
            <form action=Connexion.php method="POST">

                <label class="divItem" for="FN">Prenom : </label><input type="text" value="<?php echo $pseudo; ?>" name="nickname" class="item" id="FN">
                <label class="divItem" for="pass">Mot de passe : </label><input type="password" name="pass" class="item" id="pass">
                <input type="submit" name="Validate" value="Connexion" class="bouttons">        
                <a href="Users.php"> Lister les utilisateurs</a>
            </form>
        </div>
    </body>
</html>
