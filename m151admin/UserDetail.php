
<?php
include './FonctionBD.php';
if (isset($_REQUEST['delete'])) {
    deleteUser($id);
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
            <form id="supprimer" action="UserDetail.php" method="get">
                <table border="1">
                    <?php
                    $id = $_GET['id'];
                    DetailsToHtml(SelectUser($id));
                    echo '<input type="hidden" name="idUser" value="' . $id . '" />';
                    echo '<tr><td><a href="Modification.php?id=' . $id . '">modifier</a></td></tr>';
                    echo '<input type="submit" name="delete" value="Supprimer" class="bouttons">';
                    ?>
                </table>
            </form>
        </div>
</html>

