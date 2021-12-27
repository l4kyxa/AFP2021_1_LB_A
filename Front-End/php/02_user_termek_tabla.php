<html xmlns="http://www.w3.org/1999/html">
<body>

<?php require_once '01_user_termek_keres.php'; ?>

<table border="1">
    <thead>
    <tr>
        <th>Termék neve</th>
        <th>Gyártó</th>
        <th>Szín</th>
        <th>Méret</th>
        <th>Ár</th>
        <th>Státusz</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i = 0; $i < count($utermekek); $i++) { ?>
        <tr>
            <td><?= $utermekek[$i] -> TermekNev ?></td>
            <td><?= $utermekek[$i] -> GyartoNev ?></td>
            <td><?= $utermekek[$i] -> Szin?></td>
            <td><?= $utermekek[$i] -> Meret?></td>
            <td><?= $utermekek[$i] -> Ar?></td>
            <td><?= $utermekek[$i] -> Statusz?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>