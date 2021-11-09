<html>
<body>

Back-End felé küldött adatok<br><br>

<?php
if(isset($_POST["felhasznalo_letrehoz"]))
{
    echo "FELHASZNÁLÓ LÉTREHOZÁSA <br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Felhasználói név.:" .$_POST["name"]."<br>";
    echo "Email.:" .$_POST["email"]."<br>";
    echo "Jelszó.:" .$_POST["jelszo"]."<br>";
    echo "Bejelentkezve.:" .$_POST["bejelentkezve"]."<br>";
    echo "Státusz.:" .$_POST["statusz"]."<br>";

}

if(isset($_POST["felhasznalo_modosit"]))
{
    echo "FELHASZNÁLÓ MÓDOSÍTÁSA<br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Felhasználói név.:" .$_POST["name"]."<br>";
    echo "Email.:" .$_POST["email"]."<br>";
    echo "Jelszó.:" .$_POST["jelszo"]."<br>";
    echo "Bejelentkezve.:" .$_POST["bejelentkezve"]."<br>";
    echo "Státusz.:" .$_POST["statusz"]."<br>";

}

if(isset($_POST["felhasznalo_torol"]))
{
    echo "FELHASZNÁLÓ TÖRLÉSE<br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Felhasználói név.:" .$_POST["name"]."<br>";
    echo "Email.:" .$_POST["email"]."<br>";
    echo "Jelszó.:" .$_POST["jelszo"]."<br>";
    echo "Bejelentkezve.:" .$_POST["bejelentkezve"]."<br>";
    echo "Státusz.:" .$_POST["statusz"]."<br>";

}


if(isset($_POST["felhasznalo_listaz"]))
{
    echo "FELHASZNÁLÓK LISTÁZÁSA<br>";


}
if(isset($_POST["felhasznalo_keres"]))
{
    echo "FELHASZNÁLÓK keresése<br>";


}

?>

<br><br>
10 mp múlva átirányítjuk a kezdőlapra
<?php header( 'Refresh: 10; URL=..\index.php');?>

</body>
</html>