<html>
<body>

<?php
if(isset($_POST["termod"]))
{

require_once 'dbhandler.php';
require_once 'functions.php';
require_once '01_admin_termek_keres.php';
$aID = $_POST['aruID'];

$record = recordFetch() ?>

<h1>Módosítsd a kiválasztott áru adatait!</h1>
<table border="1">
    <thead>
    <tr>
        <td>Termék neve</td>
        <td>Termék gyártója</td>
        <td>Termék színe</td>
        <td>Termék mérete</td>
        <th>Termék mennyisége</th>
        <th>Termék megjegyzés</th>
        <th>Termék ára</th>
        <th>Termék készleten (I/N)</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $record['TermekNev']?></td>
        <td><?= $record['GyartoNev']?></td>
        <td><?= $record['Szin']?></td>
        <td><?= $record['Meret']?></td>
        <td>
            <form action="03_admin_termeklist_update.php" method="POST" accept-charset="utf-8">
                <input type ="text" name="Mennymod" value="<?=$record['Mennyiseg']?>" placeholder="mennyiség"/>
                <input type="hidden" name="aruID" value="<?= $record['Aru_ID'] ?>">
                <button type="submit" name="Mennymodosit" value="1">Mentés</button>
            </form>
        </td>
        <td>
            <form action="03_admin_termeklist_update.php" method="POST" accept-charset="utf-8">
                <input type ="text" name="Megjmod" value="<?=$record['Megjegyzes']?>" placeholder="megjegyzes"/>
                <input type="hidden" name="aruID" value="<?= $record['Aru_ID'] ?>">
                <button type="submit" name="Megjmodosit" value="1">Mentés</button>
            </form>
        </td>
        <td>
            <form action="03_admin_termeklist_update.php?>" method="POST" accept-charset="utf-8">
                <input type ="text" name="Armod" value="<?=$record['Ar']?>" placeholder="ár"/>
                <input type="hidden" name="aruID" value="<?= $record['Aru_ID'] ?>">
                <button type="submit" name="Armodosit" value="1">Mentés</button>
            </form>
        </td>
        <td>
            <form action="03_admin_termeklist_update.php?>" method="POST" accept-charset="utf-8">
                <input type="checkbox" placeholder="státusz" name="Statmod" id="Statmod" value="<?=$record['Statusz']?>" required>
                <input type="hidden" name="aruID" value="<?= $record['Aru_ID'] ?>">
                <button type="submit" name="Statmodosit" value="1">Mentés</button>
            </form>
        </td>
    </tr>
    </tbody>
</table>
<?php }

if(isset($_POST["Mennymodosit"])) {
    require_once 'dbhandler.php';

    $aID = $_POST['aruID'];

    if (array_key_exists('Mennymodosit', $_POST) && $_POST['Mennymodosit'] == 1) {
        $uj_menny = $_POST['Mennymod'];
        /*print $uj_menny;*/
        if ($uj_menny != null && !empty($uj_menny)) {
            $query = "UPDATE aruk SET Mennyiseg = '$uj_menny' WHERE Aru_ID = '$aID'";

            if ($conn->query($query) === TRUE) {
                echo "Adat sikeresen módosítva!";
                /*header( 'Refresh: 1; URL=03_admin_termeklist_update.php');*/
            } else {
                echo "Hiba a módosítás során: " . $conn->error;
            }


            $conn->close();


        }
    }
}

?>

</body>
</html>
