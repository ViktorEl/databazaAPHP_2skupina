<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            mysqli_set_charset($pripojenie, "utf8");

            $dotaz = "SELECT * FROM tovar";

            $prijem = mysqli_query($pripojenie, $dotaz);

            
            echo "<table>";
                echo "<caption>Tovar v Tescu </caption>";
                echo "<tr>
                        <th>tovar</th>
                        <th>cena</th>
                        <th>mnozstvo</th>
                        <th>spotreba</th>
                </tr>";

            while($riadok = mysqli_fetch_assoc($prijem)) {
                echo "<tr>
                        <td>".$riadok["nazov"]."</td>
                        <td>".$riadok["cena"]."</td>
                        <td>".$riadok["mnozstvo"]."</td>
                        <td>".$riadok["spotreba"]."</td>
                </tr>";
            }
            echo "</table>";
        }

    ?>




    
</body>
</html>