<html>
<body>

Back-End felé küldött adatok<br><br>

<?php
if(isset($_POST["bejegyzes_letrehoz"]))
{
    echo "BEJEGYZÉS LÉTREHOZÁSA <br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Email.:" .$_POST["email"]."<br>";
    echo "Üzenet:" .$_POST["uzenet"]."<br>";
    echo "Dátum.:" .$_POST["datum"]."<br>";
    echo "Státusz.:" .$_POST["status"]."<br>";




}

if(isset($_POST["bejegyzes_modosit"]))
{
    echo "BEJEGYZÉS Módosítása <br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Email.:" .$_POST["email"]."<br>";
    echo "Üzenet:" .$_POST["uzenet"]."<br>";
    echo "Dátum.:" .$_POST["datum"]."<br>";
    echo "Státusz.:" .$_POST["status"]."<br>";

}

if(isset($_POST["bejegyzes_torol"]))
{
    echo "BEJEGYZÉS Törlése <br>";
    echo "ID.:" .$_POST["id"]."<br>";
    echo "Email.:" .$_POST["email"]."<br>";
    echo "Üzenet:" .$_POST["uzenet"]."<br>";
    echo "Dátum.:" .$_POST["datum"]."<br>";
    echo "Státusz.:" .$_POST["status"]."<br>";
}


if(isset($_POST["bejegyzes_listaz"]))
{
    echo "Bejegyzés LISTÁZÁSA<br>";


}
if(isset($_POST["bejegyzes_keres"]))
{
    echo "KERESÉS alábbi paraméterrel:<br>";
    echo $_POST["bejegyzes_kereses"]."<br>";


}

?>

<br><br>
10 mp múlva átirányítjuk a kezdőlapra
<?php header( 'Refresh: 10; URL=..\index.php');?>

</body>
</html>