<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <h3>Oblubený predmet</h3>
        <input type="radio" name="predmet" value="1" required> <label>Programovanie</label><br>
        <input type="radio" name="predmet" value="2" required> <label>Linux</label><br>
        <input type="radio" name="predmet" value="3" required> <label>SIE</label><br>
        <input type="radio" name="predmet" value="4" required> <label>Windows server</label><br>

        <h3>Oblubeny den v pracovnom tyzdni</h3>
        <input type="radio" name="den" value="1" required> <label>Pondelok</label><br>
        <input type="radio" name="den" value="2" required> <label>Utorok</label><br>
        <input type="radio" name="den" value="3" required> <label>Streda</label><br>
        <input type="radio" name="den" value="4" required> <label>Štvrtok</label><br>
        <input type="radio" name="den" value="5" required> <label>Piatok</label><br>

        <h3>Oblubena farba</h3>
        <input type="text" name="farba" placeholder="Oblubena farba" required><br>

        <h3>Zadajte vek</h3>
        <input type="number" name="vek" placeholder="Zadajte svoj vek" min="14" max="20" required><br>
        <input type="submit" name="tlacidlo" value="Odoslať"><br>
    </form>

    <?php
        if(isset($_POST["tlacidlo"])) {
            if(isset($_POST["predmet"]) && isset($_POST["den"]) && isset($_POST["farba"]) && isset($_POST["vek"])) {
                $predmetValue = $_POST["predmet"];
                if($predmetValue == "1") {
                    $predmet = "Programovanie";
                }
                elseif($predmetValue == "2") {
                    $predmet = "Linux";
                }  
                elseif($predmetValue == "3") {
                    $predmet = "SIE";

                }
                else {
                    $predmet = "Windows server";
                }

                $denValue = $_POST["den"];
                if($denValue == "1") {
                    $den = "Pondelok";
                }
                elseif($denValue == "2") {
                    $den = "Utorok";
                }
                elseif($denValue == "3") {
                    $den = "Streda";
                }
                elseif($denValue == "4") {
                    $den = "Stvrtok";
                }
                else {
                    $den = "Piatok";
                }

                $farba = $_POST["farba"];
                $vek = $_POST["vek"];

                




            }

        }





    ?>




    
</body>
</html>