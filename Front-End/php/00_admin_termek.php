<html>
<body>

<?php
if(isset($_POST["termek_letrehoz"])) {
    require_once 'dbhandler.php';
    require_once 'functions.php';


    $id = (int)$_POST['Kategoria'];
    $termeknev = $_POST["TermekNev"];
    $gyartonev = $_POST["GyartoNev"];
    $szin = $_POST["Szin"];
    $meret = $_POST["Meret"];
    $mennyiseg = $_POST["Mennyiseg"];
    $megjegyzes = $_POST["Megjegyzes"];
    $kep = $_POST["Kep"];
    $ar = $_POST["Ar"];
    $statusz = $_POST["Statusz"];

    /*    echo "TERMÉK LÉTREHOZÁSA <br>";
    echo "Termékazonosító_ID.:" .$id."<br>";
    echo "Termék név.:" .$termeknev. "<br>";
    echo "Gyártó név.:" .$gyartonev. "<br>";
    echo "Szín.:" .$szin. "<br>";
    echo "Méret.:" .$meret. "<br>";
    echo "Mennyiség.:" .$mennyiseg. "<br>";
    echo "Megjegyzés.:" .$megjegyzes. "<br>";
    echo "Kép.:" .$kep. "<br>";
    echo "Ár.:" .$ar. "<br>";
    echo "Státusz.:" .$statusz. "<br>";
    print 'Létrehozom a terméket...';*/

    createAru($conn, $id, $termeknev, $gyartonev, $szin, $meret, $mennyiseg, $megjegyzes, $kep, $ar, $statusz);
}

if(isset($_POST["termek_modosit"]))
{
    echo "TERMÉK MÓDOSÍTÁSA<br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Termék.:" .$_POST["termek"]."<br>";
    echo "Főkategória.:" .$_POST["fokategoria"]."<br>";
    echo "Alkategória.:" .$_POST["alkategoria"]."<br>";
    echo "Gyártó.:" .$_POST["gyarto"]."<br>";
    echo "Szín.:" .$_POST["szin"]."<br>";
    echo "Méret.:" .$_POST["meret"]."<br>";
    echo "Mennyiség.:" .$_POST["mennyiseg"]."<br>";
    echo "Megjegyzés.:" .$_POST["megjegyzes"]."<br>";
    echo "Kép.:" .$_POST["kep"]."<br>";
    echo "Ár.:" .$_POST["ar"]."<br>";
    echo "Státusz.:" .$_POST["status"]."<br>";

}

if(isset($_POST["termek_torol"]))
{
    echo "TERMÉK TÖRLÉSE <br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Termék.:" .$_POST["termek"]."<br>";
    echo "Főkategória.:" .$_POST["fokategoria"]."<br>";
    echo "Alkategória.:" .$_POST["alkategoria"]."<br>";
    echo "Gyártó.:" .$_POST["gyarto"]."<br>";
    echo "Szín.:" .$_POST["szin"]."<br>";
    echo "Méret.:" .$_POST["meret"]."<br>";
    echo "Mennyiség.:" .$_POST["mennyiseg"]."<br>";
    echo "Megjegyzés.:" .$_POST["megjegyzes"]."<br>";
    echo "Kép.:" .$_POST["kep"]."<br>";
    echo "Ár.:" .$_POST["ar"]."<br>";
    echo "Státusz.:" .$_POST["status"]."<br>";
}


if(isset($_POST["termek_listaz"]))
{
    require_once 'TermekMezok.php';
    require_once 'dbhandler.php';
    require_once 'functions.php';

    ?>

    <h1>Termékek listázása:</h1>
    <?php
    /*$termekek = */

    $sql1 = 'SELECT * FROM Aruk WHERE Termekazonosito_ID = 1';
    listAru($conn, $sql1);

    $sql2 = 'SELECT * FROM Aruk WHERE Termekazonosito_ID = 2';
    listAru($conn, $sql2);
}


if(isset($_POST["termek_keres"]))
{
    echo "KERESÉS alábbi paraméterrel:<br>";
    echo $_POST["temek_kereses"]."<br>";


}

?>

<br><br>
10 mp múlva átirányítjuk a kezdőlapra
<?php header( 'Refresh: 10; URL=..\index.php');?>

</body>
</html>