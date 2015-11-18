
<?php

//Informations relatives à la BD
define("HOST", "127.0.0.1");
define("DBNAME", "m151ex1");
define("USER", "miroslav");
define("PASS", "Super");

//Nom des tables !!A CHANGER!!
define("TABLENAME", "users");

//Noms des champs !!A CHANGER!!
define("IDUSER", "idUser");
define("FIRSTNAME", "prenom");
define("LASTNAME", "nom");
define("BIRTHDATE", "dateNaissance");
define("DESCRIPTION", "description");
define("EMAIL", "email");
define("USERNAME", "pseudo");
define("PASSWORD", "motPass");

session_start();

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
function Insertion($fstName, $lastName, $birthDate, $description, $email, $nickname, $pass) {
    $db = GetConnexion();
    $req = $db->prepare('INSERT INTO '.TABLENAME.'('.FIRSTNAME.','.LASTNAME.','.BIRTHDATE.','.DESCRIPTION.','.EMAIL.','.USERNAME.','.PASSWORD.') VALUES(:FirstName, :LastName, :BirthDate, :Description, :Email,:Nickname, :Password)');
    $req->bindParam(':FirstName', $fstName, PDO::PARAM_STR);
    $req->bindParam(':LastName', $lastName, PDO::PARAM_STR);
    $req->bindParam(':BirthDate', $birthDate, PDO::PARAM_STR);
    $req->bindParam(':Description', $description, PDO::PARAM_STR);
    $req->bindParam(':Email', $email, PDO::PARAM_STR);
    $req->bindParam(':Nickname', $nickname, PDO::PARAM_STR);
    $req->bindParam(':Password', $pass, PDO::PARAM_STR);
    $retour = $req->execute();
}


function SelectUsers() {
    $db = GetConnexion();
    $req = $db->prepare('SELECT '.IDUSER.','.FIRSTNAME.','.LASTNAME.' FROM '.TABLENAME);
    $req->execute();
    $requestResponse = $req->fetchAll();
    return $requestResponse;
}

function SelectUser($id) {
    echo $id;
    $db = GetConnexion();
    $req = $db->prepare("SELECT * FROM ".TABLENAME." WHERE ".IDUSER."='" . $id . "'");
    $req->execute();
    $requestResponse = $req->fetch();
    return $requestResponse;
}

function deleteUser($id) {
    $id = $_REQUEST['idUser'];
    $db = GetConnexion();
    $req = $db->prepare("DELETE FROM ".TABLENAME." WHERE ".IDUSER."= '$id'");
    $req->execute();
}

function login($username, $pass) {
    $db = GetConnexion();
    $req = $db->prepare('SELECT '.IDUSER.','.USERNAME.','.PASSWORD.' FROM '.TABLENAME.' WHERE '.USERNAME.'=:user AND '.PASSWORD.'=:password');
    $req->bindParam(':user', $username, PDO::PARAM_STR);
    $req->bindParam(':password', $pass, PDO::PARAM_STR);
    $req->execute();
    $result = $req->fetch(PDO::FETCH_ASSOC);
    if ($result === false) {
        return false;
    } else {
		
        return $result['pseudo'];
    }
}
