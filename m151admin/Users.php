<?php
include './FonctionBD.php';
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
            <?php
            AssocToHtml(SelectUsers());
            ?>
        </div>
    </body>
</html>

