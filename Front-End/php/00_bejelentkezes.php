<html>
<body>

Back-End felé küldött adatok<br><br>

Felhasználói név:<?php echo $_POST["felhasznaloinev"]; ?><br>
Jelszó: <?php echo $_POST["jelszo"]; ?><br>
Emlékezz rám: <?php echo $_POST["remember"]; ?><br>
10 mp múlva átirányítjuk a kezdőlapra
<?php header( 'Refresh: 10; URL=..\index.php');?>

</body>
</html>