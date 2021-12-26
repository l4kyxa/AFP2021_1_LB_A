<?php

require_once 'dbhandler.php';
include 'user_TermekMezok.php';


// Az űrlapot elküldték ?
if (isset($_GET["kuld"])) {
// Létezik a 'szoveg' nevű mező?
    if (isset($_GET["szoveg"])) {


        /*print $_GET["szoveg"] > "";*/
        $keresesi_kulcsszo = $_GET["szoveg"];
        echo "A keresett kifejezés: " . $keresesi_kulcsszo . "<br>";

        if ($_GET["szoveg"] > "") {
            //töröljök azokat a karaktereket, amik nem betűk:
            $keresesi_kulcsszo = preg_replace("/[^a-zA-Z_-]/i", " ", $keresesi_kulcsszo);
            //szedjük le a keresőkifejezés elejéről és végéről a szóközöket:
            $keresesi_kulcsszo = trim($keresesi_kulcsszo);
            //plusz speciális karakterek törlése sql-ből:
            $keresesi_kulcsszo = mysqli_real_escape_string($conn, $keresesi_kulcsszo);
        }
    }
}

            ?>