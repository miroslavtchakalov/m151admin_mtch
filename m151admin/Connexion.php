<?php

define("HOST","127.0.0.1");
define("DBNAME","m151ex1");
define("USER","Miroslav");
define("PASS","127.0.0.1");

function connexion()
{
    
   
    try {
    $dbh = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";

}
}

function Insertion()
{
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
