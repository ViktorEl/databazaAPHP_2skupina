<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <h3>Oblubený predmet</h3>
        <input type="radio" name="predmet" value="1"> <label>Programovanie</label><br>
        <input type="radio" name="predmet" value="2"> <label>Linux</label><br>
        <input type="radio" name="predmet" value="3"> <label>SIE</label><br>
        <input type="radio" name="predmet" value="4"> <label>Windows server</label><br>

        <h3>Oblubeny den v pracovnom tyzdni</h3>
        <input type="radio" name="den" value="1"> <label>Pondelok</label><br>
        <input type="radio" name="den" value="2"> <label>Utorok</label><br>
        <input type="radio" name="den" value="3"> <label>Streda</label><br>
        <input type="radio" name="den" value="4"> <label>Štvrtok</label><br>
        <input type="radio" name="den" value="5"> <label>Piatok</label><br>

        <h3>Oblubena farba</h3>
        <input type="text" name="farba" placeholder="Oblubena farba" required><br>

        <h3>Zadajte vek</h3>
        <input type="number" name="vek" placeholder="Zadajte svoj vek" min="14" max="20" required><br>
        <input type="submit" name="tlacidlo" value="Odoslať"><br>
    </form>


    
</body>
</html>