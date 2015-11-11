<?php

if (isset($_SESSION['userlogged'])) {
    echo ' bienvenu Utilisateur';
}

var_dump($_SESSION['userlogged']);

