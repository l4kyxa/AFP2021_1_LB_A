<?php

require_once 'dbhandler.php';
require_once 'functions.php';
require_once '00_admin_termek.php';
require_once 'TermekMezok.php';

$termek = new TermekMezok();

get_connect();

if ($talalat = mysqli_query($conn, $sql)) {

    while (($sor = mysqli_fetch_assoc($talalat)) !== null) {


        $termek = new TermekMezok();

        $termek->Aru_ID = $sor['Aru_ID'];
        $termek->TermekNev = $sor['TermekNev'];
        $termek->GyartoNev = $sor['GyartoNev'];
        $termek->Szin = $sor['Szin'];
        $termek->Meret = $sor['Meret'];
        $termek->Mennyiseg = $sor['Mennyiseg'];
        $termek->Megjegyzes = $sor['Megjegyzes'];
        $termek->Ar = $sor['Ar'];
        $termek->Statusz = $sor['Statusz'];
        array_push($termekek, $termek);

    }

} else {
    error_log('Hiba! A lekérdezés sikertelen!');
}



?>