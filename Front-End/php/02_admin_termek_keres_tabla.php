<?php


require_once '01_admin_termek_keres.php';

?>

<html>
<body>

<table border="1">
    <thead>
    <tr>
        <th>Termék neve</th>
        <th>Gyártó</th>
        <th>Szín</th>
        <th>Méret</th>
        <th>Mennyiség</th>
        <th>Megjegyzés</th>
        <th>Ár</th>
        <th>Státusz</th>
        <th colspan="2">Műveletek</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i < count($atermekek); $i++) { ?>
        <tr>
            <td><?= $atermekek[$i] -> TermekNev ?></td>
            <td><?= $atermekek[$i] -> GyartoNev ?></td>
            <td><?= $atermekek[$i] -> Szin?></td>
            <td><?= $atermekek[$i] -> Meret?></td>
            <td><?= $atermekek[$i] -> Mennyiseg?></td>
            <td><?= $atermekek[$i] -> Megjegyzes?></td>
            <td><?= $atermekek[$i] -> Ar?></td>
            <td><?= $atermekek[$i] -> Statusz?></td>
            <td>
                <br>
                <form name="form1" method="post" action="03_admin_termeklist_update.php">
                    <input type="hidden" name="aruID" value="<?= $atermekek[$i] -> Aru_ID ?>">
                    <input type="submit" name="termod" value="Módosítás">
                </form>
            </td>

            <td>
                <br>
                <form action="03_admin_termek_delete.php" method="POST" onsubmit="return confirm('Biztos vagy benne, hogy törölni szeretnéd a terméket?')">
                    <input type="hidden" name="aruID" value="<?= $atermekek[$i] -> Aru_ID ?>">
                    <input type="submit" name="tertor" value="Törlés">
                </form>
            </td>


        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
