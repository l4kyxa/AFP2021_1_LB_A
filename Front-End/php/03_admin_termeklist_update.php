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



</body>
</html>
