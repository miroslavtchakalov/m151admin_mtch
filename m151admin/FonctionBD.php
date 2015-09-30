
<?php

define("HOST", "127.0.0.1");
define("DBNAME", "m151ex1");
define("USER", "miroslav");
define("PASS", "Super");

function GetConnexion() {
    static $dbh = NULL;
    if ($dbh === NULL) {
        try {
            $dbh = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
        }
    }

    return $dbh;
}

function Insertion() {
    $db = GetConnexion();
    $req = $db->prepare('INSERT INTO users(prenom,nom,dateNaissance,description,email,pseudo,motPass) VALUES(:FirstName, :LastName, :BirthDate, :Description, :Email,:Nickname, :Password)');
    $req->bindParam(':FirstName', $_POST['FirstName'], PDO::PARAM_STR);
    $req->bindParam(':LastName', $_POST['LastName'], PDO::PARAM_STR);
    $req->bindParam(':BirthDate', $_POST['BirthDate'], PDO::PARAM_STR);
    $req->bindParam(':Description', $_POST['Description'], PDO::PARAM_STR);
    $req->bindParam(':Email', $_POST['Email'], PDO::PARAM_STR);
    $req->bindParam(':Nickname', $_POST['Nickname'], PDO::PARAM_STR);
    $req->bindParam(':Password', $_POST['Password'], PDO::PARAM_STR);
    $retour = $req->execute();
}

function SelectUsers() {
    $db = GetConnexion();
    $req = $db->prepare("SELECT idUser,prenom,nom from users");
    $req->execute();
    $requestResponse = $req->fetchAll();
    return $requestResponse;
}
function SelectUser($id) {
    echo $id;
    $db = GetConnexion();
    $req = $db->prepare("SELECT * FROM users WHERE idUser='".$id."'");
    $req->execute();
    $requestResponse = $req->fetch();
    return $requestResponse;
}

function AssocToHtml($listUsers) {
    foreach ($listUsers as $val) {
        echo '<tr><td>' . $val['prenom'] . ' </td><td> ' . $val['nom'] . '</td><td> <a href="Userdetail.php?id='.$val['idUser'].'"> <= voir les details</a></td></tr>';
    }
}
function DetailsToHtml($UserInfo){
        echo '<tr><td>' . $UserInfo['prenom'] . ' </td><td> ' . $UserInfo['nom'] . '</td><td>' . $UserInfo['dateNaissance'] . '</td><td>' . $UserInfo['pseudo'] . '</td><td>' . $UserInfo['email'] . '</td><td>' . $UserInfo['description'] . '</td></td></tr>';
    
}
function deleteUser($id)
{
    
}