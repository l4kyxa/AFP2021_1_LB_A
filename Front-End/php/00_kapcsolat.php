<html>
<body>

<?php

if (isset($_POST['submit4']))
{
    $name = $_POST['felhasznaloinev'];
    $subject = $_POST['targy'];
    $to = $_POST['email'];
    $message = $_POST['uzenet'];

    $headers = "From: ".$from;
    $txt = "Kaptál egy e-mail-t tőle ".$name.".\n\n".$message;

    mail($to, $subject, $txt);
}
?>

<br><br>
Sikerült, 10 mp múlva átirányítjuk a kezdőlapra
<?php header( 'Refresh: 10; URL=..\index.php');?>

</body>
</html>