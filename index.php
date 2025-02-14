<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pripajanie do DB</h1>

    <form action="index.php" method="POST">
        <input type="text" name="meno" placeholder="zadajte meno" required> <br>
        <input type="password" name="heslo" placeholder="zadajte heslo" required> <br>
        <input type="submit" name="tlacidlo" value="Odoslat">
    </form>


    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["meno"]) && isset($_POST["heslo"])) {
                $db_server = "localhost";
                $db_meno = "root";
                $db_heslo = "vertrigo";
                $db_nazov = "data";

                $pripojenie = mysqli_connect($db_server, $db_meno, $db_heslo, $db_nazov);

                $meno = $_POST["meno"];
                $heslo = $_POST["heslo"];

                $dotaz = "INSERT INTO pouzivatelia (meno, heslo)
                VALUES ('$meno', '$heslo')";

                $odoslanie = mysqli_query($pripojenie, $dotaz);
                if($odoslanie) {
                    echo "udaje odoslane";
                }
                else {
                    die("chyba odosielania");
                }

        }
    }
     
    ?>


</body>
</html>