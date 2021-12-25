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
    <?php for ($i = 0; $i < count($termekek); $i++) { ?>
    <tr>
        <td><?= $termekek[$i] -> TermekNev ?></td>
        <td><?= $termekek[$i] -> GyartoNev ?></td>
        <td><?= $termekek[$i] -> Szin?></td>
        <td><?= $termekek[$i] -> Meret?></td>
        <td><?= $termekek[$i] -> Mennyiseg?></td>
        <td><?= $termekek[$i] -> Megjegyzes?></td>
        <td><?= $termekek[$i] -> Ar?></td>
        <td><?= $termekek[$i] -> Statusz?></td>
        <td>
            <br>



    </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
