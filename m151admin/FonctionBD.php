
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
            $req = $db->prepare("SELECT * from users");
            $req->execute();
            $requestResponse = $req->fetchAll(PDO::PARAM_STR);
            return $requestResponse;
        }

        function AssocToHtml($listUsers) {
            foreach ($listUsers as $val) {
                echo '<td>' . $val['prenom'] . '/' . $val['nom'] . '</p>';
            }
        }
        ?>
 