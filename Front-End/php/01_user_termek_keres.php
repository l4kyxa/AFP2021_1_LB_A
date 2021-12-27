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

            $utermekek = array();

            if ($sql = "SELECT TermekNev, GyartoNev, Szin, Meret, Ar, Statusz FROM aruk WHERE Termekazonosito_ID = 1 and TermekNev LIKE '%$keresesi_kulcsszo%'")
            {
                $talalat = mysqli_query($conn, $sql);

                if ($talalat->num_rows > 0) {
                    while (($usor = mysqli_fetch_assoc($talalat)) !== null) {
                        $utermek = new user_TermekMezok();


                        /*$termek->Aru_ID = $sor['Aru_ID'];*/
                        $utermek->TermekNev = $usor['TermekNev'];
                        $utermek->GyartoNev = $usor['GyartoNev'];
                        $utermek->Szin = $usor['Szin'];
                        $utermek->Meret = $usor['Meret'];
                        $utermek->Ar = $usor['Ar'];
                        $utermek->Statusz = $usor['Statusz'];
                        array_push($utermekek, $utermek);

                    }
                }



            }
    }
}

            ?>