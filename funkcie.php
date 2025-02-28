
<?php
    function pripojenieDoDb($ip, $meno, $heslo, $databaza) {
        global $pripojenie;
        $db_server = $ip;
        $db_meno = $meno;
        $db_heslo = $heslo;
        $db_nazov = $databaza;
        $pripojenie = mysqli_connect($db_server, $db_meno, $db_heslo, $db_nazov);
    }
?>