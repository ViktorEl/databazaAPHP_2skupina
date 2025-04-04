<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Prihlaste sa</h1>

    <form action="prihlasenie.php" method="post">
        <label>Prihlasovacie meno</label> <input type="text" name="meno" placeholder="Zadajte meno" required><br>
        <label>Prihlasovacie heslo</label> <input type="password" name="heslo" placeholder="Zadajte heslo" required> <br>
        <input type="submit" name="tlacidlo" value="Prihlásiť">
    </form>

    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["meno"]) && isset($_POST["heslo"])) {
                $server = "localhost";
                $login = "root";
                $password = "vertrigo";
                $nazov = "registracia";

                $pripojenie = mysqli_connect($server, $login, $password, $nazov);
                mysqli_set_charset($pripojenie, "utf8");

                $meno = $_POST["meno"]; 
                $meno = mysqli_real_escape_string($pripojenie, $meno);
                $heslo = $_POST["heslo"];
                $heslo = mysqli_real_escape_string($pripojenie, $heslo);

                $dotaz = "SELECT * FROM persons WHERE username = '$meno'";
                $prijem = mysqli_query($pripojenie, $dotaz);
                $pocetZaznamov = mysqli_num_rows($prijem);
                if($pocetZaznamov < 1) {
                    die("Zaregistrujte sa");
                }

                $row = mysqli_fetch_assoc($prijem);
                $hash = $row["passwd"];
                if(!password_verify($heslo, $hash)) {
                    die("Zlé prihlasovacie heslo");
                }
                else {
                    echo "Uspešné prihlásenie";
                }
                
            }

        }






    ?>




    
</body>
</html>