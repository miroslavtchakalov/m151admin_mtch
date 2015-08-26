<?php

function connextion($username,$pass,$dbname)
{
    $pdo = new PDO('mysql:host=localhost;dbname='.$dbname,$username ,$pass);  
}
