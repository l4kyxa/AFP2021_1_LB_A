<html>
<body>

Back-End felé küldött adatok<br><br>
Felhasználói név:<?php echo $_POST["felhasznaloinev"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Üzenet: <?php echo $_POST["uzenet"]; ?><br>

<br><br>
10 mp múlva átirányítjuk a kezdőlapra
<?php header( 'Refresh: 10; URL=..\index.php');?>

</body>
</html>