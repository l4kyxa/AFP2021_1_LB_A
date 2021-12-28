<?php

require_once 'dbhandler.php';
include 'admin_TermekMezok.php';


// Az űrlapot elküldték ?
if (isset($_GET["kuld"])) {
// Létezik a 'szoveg' nevű mező?
    if (isset($_GET["szoveg"])) {
        $keresesi_kulcsszo = $_GET["szoveg"];
        echo "A keresett kifejezés: " . $keresesi_kulcsszo . "<br>";

        if ($_GET["szoveg"] > "") {
            //töröljök azokat a karaktereket, amik nem betűk, vagy számok:
            $keresesi_kulcsszo = preg_replace("/[^a-zA-Z_-]/i", " ", $keresesi_kulcsszo);
            /*$keresesi_kulcsszo = preg_replace('/[^a-z,A-Z,0-9,_,\-\.]/i',' ',$keresesi_kulcsszo);*/
            //szedjük le a keresőkifejezés elejéről és végéről a szóközöket:
            $keresesi_kulcsszo = trim($keresesi_kulcsszo);
            //plusz speciális karakterek törlése sql-ből:
            $keresesi_kulcsszo = mysqli_real_escape_string($conn, $keresesi_kulcsszo);

            $atermekek = array();

            if ($sql = "SELECT Aru_ID, TermekNev, GyartoNev, Szin, Meret, Mennyiseg, Megjegyzes, Ar, Statusz FROM aruk WHERE Termekazonosito_ID = 1 and TermekNev LIKE '%$keresesi_kulcsszo%'")
            {
                $talalat = mysqli_query($conn, $sql);

                if ($talalat->num_rows > 0) {
                    while (($asor = mysqli_fetch_assoc($talalat)) !== null) {
                        $atermek = new admin_TermekMezok();


                        $atermek->Aru_ID = $asor['Aru_ID'];
                        $atermek->TermekNev = $asor['TermekNev'];
                        $atermek->GyartoNev = $asor['GyartoNev'];
                        $atermek->Szin = $asor['Szin'];
                        $atermek->Meret = $asor['Meret'];
                        $atermek->Mennyiseg = $asor['Mennyiseg'];
                        $atermek->Megjegyzes = $asor['Megjegyzes'];
                        $atermek->Ar = $asor['Ar'];
                        $atermek->Statusz = $asor['Statusz'];
                        array_push($atermekek, $atermek);
                        if (empty($atermekek))
                        {

                            ?><h1>Gomb(ok) listázása:</h1> <?php
                            echo "Nincs a keresésnek megfelelő termék!";
                        }


                        if (!empty($atermekek))
                        {
                            ?> <h1>Gomb(ok) listázása:</h1> <?php
                            include '02_admin_termek_keres_tabla.php';
                        }
                    }
                }
            }
            if ($sql = "SELECT Aru_ID, TermekNev, GyartoNev, Szin, Meret, Mennyiseg, Megjegyzes, Ar, Statusz FROM aruk WHERE Termekazonosito_ID = 2 and TermekNev LIKE '%$keresesi_kulcsszo%'")
            {
                $talalat = mysqli_query($conn, $sql);

                if ($talalat->num_rows > 0) {
                    while (($asor = mysqli_fetch_assoc($talalat)) !== null) {
                        $atermek = new admin_TermekMezok();

                        $atermek->Aru_ID = $asor['Aru_ID'];
                        $atermek->TermekNev = $asor['TermekNev'];
                        $atermek->GyartoNev = $asor['GyartoNev'];
                        $atermek->Szin = $asor['Szin'];
                        $atermek->Meret = $asor['Meret'];
                        $atermek->Mennyiseg = $asor['Mennyiseg'];
                        $atermek->Megjegyzes = $asor['Megjegyzes'];
                        $atermek->Ar = $asor['Ar'];
                        $atermek->Statusz = $asor['Statusz'];
                        array_push($atermekek, $atermek);
                    }
                    if (empty($atermekek))
                    {
                        ?><h1>Rövidáru(k) listázása:</h1> <?php
                        echo "Nincs a keresésnek megfelelő termék!";
                    }

                    if (!empty($atermekek))
                    {
                        ?> <h1>Rövidáru(k) listázása:</h1> <?php
                        include '02_admin_termek_keres_tabla.php';
                    }
                }
                mysqli_close($conn);
            }
        }
    }
}
?>