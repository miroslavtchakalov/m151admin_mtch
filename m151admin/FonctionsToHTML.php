<?php
function AssocToHtml($listUsers) {
    foreach ($listUsers as $val) {
        echo '<tr><td>' . $val['prenom'] . ' </td><td> ' . $val['nom'] . '</td><td> <a href="Userdetail.php?id=' . $val['idUser'] . '"> <= voir les details</a></td></tr>';
    }
}

function DetailsToHtml($UserInfo) {
    echo '<tr><td>' . $UserInfo['prenom'] . ' </td><td> ' . $UserInfo['nom'] . '</td><td>' . $UserInfo['dateNaissance'] . '</td><td>' . $UserInfo['pseudo'] . '</td><td>' . $UserInfo['email'] . '</td><td>' . $UserInfo['description'] . '</td></td></tr>';
}


?>