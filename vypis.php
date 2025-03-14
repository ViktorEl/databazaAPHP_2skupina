<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="vypis.php" method="GET">
        <input type="submit" name="tlacidlo" value="Vypíš data"> <br>
    </form>


    <?php
        if(isset($_GET["tlacidlo"])) {
            $db_server = "localhost";
            $db_meno = "root";         
            $db_heslo = "vertrigo";     
            $db_nazov = "tesco";  
            
            $pripojenie = mysqli_connect($db_server, $db_meno, $db_heslo, $db_nazov);

            $dotaz = "SELECT * FROM tovar";

            $prijem = mysqli_query($pripojenie, $dotaz);

            while($riadok = mysqli_fetch_assoc($prijem)) {
                echo $riadok["nazov"]." ".$riadok["cena"]." ".$riadok["mnozstvo"]." ".$riadok["spotreba"];
                echo "<br>";
            }

        }

    ?>




    
</body>
</html>