<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registrácia</h2>

    <form action="registracia.php" method="post">
        <input type="text" name="login" placeholder="Pouzivatelske meno" required> <br>
        <input type="password" name="pass" placeholder="Pouzivatelske heslo" required> <br>
        <input type="submit" name="button" value="Registruj">
    </form>

    <?php
        if(isset($_POST["button"])) {
            if(isset($_POST["login"]) && isset($_POST["pass"])) {
                $db_server = "localhost";
                $db_login = "root";
                $db_password = "vertrigo";
                $db_name = "registracia";

                $connection = mysqli_connect($db_server, $db_login, $db_password, $db_name);
                mysqli_set_charset($connection, "utf8");
                $login = $_POST["login"];
                $login = mysqli_real_escape_string($connection, $login); // ochrana proti SQL injection
                $password = $_POST["pass"];
                $password = mysqli_real_escape_string($connection, $password);

                $query = "INSERT INTO persons (userName, passwd) VALUES ('$login', '$password')";
                $result = mysqli_query($connection, $query);
                if(!$result) {
                    die("chyba registracie");
                }
                else {
                    echo "Registracia prebehla úspešne";
                }

            }
        }





    ?>




    
</body>
</html>