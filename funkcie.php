
<?php
    function pripojenie($ip, $meno, $heslo, $databaza) {
        $pripojenie = mysqli_connect($ip, $meno, $heslo, $databaza);
    }
?>