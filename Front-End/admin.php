<!DOCTYPE html>
<html>
<title>www.gombrovidaru.hu</title>
<meta charset="UTF-8">
<link href="images/favicon.png" rel="icon">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<!---->
<div id="header">
    <div class="topnav" id="myTopnav">
        <a class="logo" href="kezdolap.php"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></a>
        <a href="kezdolap.php"><i class="fa fa-fw fa-home"></i> KEZDŐLAP</a>
        <a href="rolunk.php"><i class="fa fa-fw fa-user-circle-o"></i> RÓLUNK</a>
        <a href="termekek.php"><i class="fa fa-fw fa-slack"></i> TERMÉKEK</a>
        <a href="uzenofal.php"><i class="fa fa-fw fa-commenting-o"></i> ÜZENŐFAL</a>
        <a href="kapcsolat.php"><i class="fa fa-fw fa-vcard-o"></i> KAPCSOLAT</a>
        <a href="bejelentkezes.php"><i class="fa fa-fw fa-sign-in"></i> BEJELENTKEZÉS</a>
        <a href="kosar.php"><i class="fa fa-fw fa-shopping-cart"></i> KOSÁR</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
</div>

<!---->
<div id="content">
<!-- -->
<div id="box_2">
   <h2>ADMIN</h2>
</div>
    <div id="box_1">
        <h2>Felhasználó Kezelés</h2>
    </div>
    <div id="box_2">
        <div class="btncontainer">
            <div class="btnvertical-center">
                <form class="example" action="php\00_admin_felhasznalo.php" method="post">
                    <input type="text" placeholder="keresés" name="felhasznalo_kereses">
                    <button id="keres" type="submit" name="felhasznalo_keres"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

        <form action="php\00_admin_felhasznalo.php" method="post">
        <div class="container">
            <label for="id"><b>ID</b></label>
            <input type="text" placeholder="ID" name="id" id="id" required>

            <label for="name"><b>Név</b></label>
            <input type="text" placeholder="felhasználói név" name="name" id="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="email cím" name="email" id="email" required>

            <label for="jelszo"><b>Jelszó</b></label>
            <input type="password" placeholder="jelszó" name="jelszo" id="jelszo" required>

            <label for="bejelentkezve"><b>Bejelentkezve</b></label>
            <input type="text" placeholder="bejelentkezve" name="bejelentkezve" id="bejelentkezve" required>

            <label for="statusz"><b>Státusz</b></label>
            <input type="text" placeholder="státusz" name="statusz" id="statusz" required>

            <button type="submit" class="button" type="button" name="felhasznalo_letrehoz" >Létrehoz</button>
            <button type="submit" class="button" type="button" name="felhasznalo_modosit" >Módosít</button>
            <button type="submit" class="button" type="button" name="felhasznalo_torol">Töröl</button>
            <button type="submit" class="button" type="button" name="felhasznalo_listaz">Listáz</button>
        </div>
        </form>
    </div>
<div id="box_1">
    <h2>Termék Kezelés</h2>
</div>
    <div id="box_2">
        <div class="btncontainer">
            <div class="btnvertical-center">
                <form class="example" action="php\00_admin_termek.php" method="post">
                    <input type="text" placeholder="keresés" name="temek_kereses">
                    <button id="keres" type="submit"  name="termek_keres"><i class="fa fa-search" ></i></button>
                </form>
            </div>
        </div>

        <form action="php\00_admin_termek.php" method="post">
        <div class="container">
            <label for="id"><b>ID</b></label>
            <input type="text" placeholder="ID" name="id" id="id" required>

            <label for="termek"><b>Termék</b></label>
            <input type="text" placeholder="termék" name="termek" id="termek" required>

            <label for="fokategoria"><b>Főkategória</b></label>
            <input type="text" placeholder="fokategoria" name="fokategoria" id="fokategoria" required>

            <label for="alkategoria"><b>Főkategória</b></label>
            <input type="text" placeholder="alkategória" name="alkategoria" id="alkategoria" required>

            <label for="gyarto"><b>Gyártó</b></label>
            <input type="text" placeholder="gyártó" name="gyarto" id="gyarto" required>

            <label for="szin"><b>Szín</b></label>
            <input type="text" placeholder="szín" name="szin" id="szin" required>

            <label for="meret"><b>Méret</b></label>
            <input type="text" placeholder="méret" name="meret" id="meret" required>

            <label for="mennyiseg"><b>Mennyiség</b></label>
            <input type="text" placeholder="mennyiség" name="mennyiseg" id="mennyiseg" required>

            <label for="megjegyzes"><b>Megjegyzés</b></label>
            <input type="text" placeholder="megjegyzés" name="megjegyzes" id="megjegyzes" required>

            <label for="kep"><b>Kép</b></label>
            <input type="text" placeholder="kép" name="kep" id="kep" required>

            <label for="ar"><b>Ár</b></label>
            <input type="text" placeholder="ár" name="ar" id="ar" required>

            <label for="status"><b>Státusz</b></label>
            <input type="text" placeholder="státusz" name="status" id="status" required>

            <button type="submit" class="button" type="button" name="termek_letrehoz" >Létrehoz</button>
            <button type="submit" class="button" type="button" name="termek_modosit" >Módosít</button>
            <button type="submit" class="button" type="button" name="termek_torol">Töröl</button>
            <button type="submit" class="button" type="button" name="termek_listaz">Listáz</button>
        </div>
        </form>
    </div>



    <div id="box_1">
        <h2>Bejegyzés Kezelés</h2>
    </div>
    <div id="box_2">
        <div class="btncontainer">
            <div class="btnvertical-center">
                <form class="example" action="php\00_admin_bejegyzes.php" method="post">
                    <input type="text" placeholder="keresés" name="bejegyzes_kereses">
                    <button id="keres" type="submit"  name="bejegyzes_keres"><i class="fa fa-search" ></i></button>
                </form>
            </div>
        </div>

        <form action="php\00_admin_bejegyzes.php" method="post">
        <div class="container">
            <label for="id"><b>ID</b></label>
            <input type="text" placeholder="ID" name="id" id="id" required>

            <label for="name"><b>Név</b></label>
            <input type="text" placeholder="felhasználói név" name="name" id="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="email cím" name="email" id="email" required>

            <label for="uzenet"><b>Üzenet</b></label>
            <input type="text" placeholder="üzenet" name="uzenet" id="uzenet" required>

            <label for="datum"><b>Dátum</b></label>
            <input type="text" placeholder="dátum" name="datum" id="datum" required>

            <label for="status"><b>Státusz</b></label>
            <input type="text" placeholder="státusz" name="status" id="status" required>

            <button type="submit" class="button" type="button" name="bejegyzes_letrehoz" >Létrehoz</button>
            <button type="submit" class="button" type="button" name="bejegyzes_modosit" >Módosít</button>
            <button type="submit" class="button" type="button" name="bejegyzes_torol">Töröl</button>
            <button type="submit" class="button" type="button" name="bejegyzes_listaz">Listáz</button>
        </div>
        </form>
    </div>


</div>
<!---->
<div id="footer">
    <div id="box_1">
        <h2> Pál és Vásárhelyi BT.</h2>
        <div class="flex-container">

            <div class="flex-item">
                <a href="index.php" target="_blank" rel="noopener"> <i class="fa fa-globe"
                                                                       style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></a>
                <h3>Web</h3>
                <h4>www.gombrovidaru.hu</h4>
            </div>

            <div class="flex-item">
                <a><i class="fa fa-phone" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></a>
                <h3>Telefon</h3>
                <h4 >+36-30 /123 - 45 - 67</h4>
            </div>

            <div class="flex-item">
                <a href="https://www.google.com/maps/place/Budapest,+Istv%C3%A1n+%C3%BAt+12,+1041/@47.5610963,19.087483,17z/data=!3m1!4b1!4m5!3m4!1s0x4741da36e2c14bf1:0xeb4c96c4aabc8193!8m2!3d47.5610963!4d19.0896717"
                   target="_blank" rel="noopener"><i class="fa  fa-home" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></a>
                <h3>Székhely</h3>
                <h4>H. 1046. Budapest, István út 12.<h4>
            </div>
        </div>
        <hr>
        <div class="btncontainer">
            <div class="btnvertical-center">
                <h3>• ©2021 Interlude • All Rights Reserved • Adapted by gombrovidaru •</h3>
            </div>
        </div>
    </div>
</div>

<!---->
<button onclick="topFunction()" id="laptetejeregomb" title="vissza a lap tetejére">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
</button>
<!---->
<script src="script/regisztracio.js"></script>
<script src="script/lapteteje.js"></script>
<script src="script/menugomb.js"></script>
<script src="script/button_funk.js"></script>



</body>
</html>
