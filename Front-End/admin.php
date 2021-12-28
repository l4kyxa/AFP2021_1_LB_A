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
<?php include "./header.php" ?>
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

            <label for="aszf"><b>ASZF</b></label>
            <select type="text" placeholder="aszf" name="aszf" id="aszf" required>
                <option value="1">igen</option>
                <option value="2">nem</option>

            </select>

            <label for="bejelentkezve"><b>Bejelentkezve</b></label>
            <select type="text" placeholder="" name="bejelentkezve" id="bejelentkezve" required>
                <option value="1">igen</option>
                <option value="2">nem</option>
            </select>

            <label for="statusz"><b>Státusz</b></label>
            <select type="text" placeholder="" name="statusz" id="statusz" required>
                <option value="1">aktiv</option>
                <option value="2">passziv</option>
            </select>

            <button type="submit" class="button" type="button" name="felhasznalo_letrehoz" >Létrehoz</button>
            <button type="submit" class="button" type="button" name="felhasznalo_modosit" >Módosít</button>
            <button type="submit" class="button" type="button" name="felhasznalo_torol">Töröl</button>
            <button type="submit" class="button" type="button" name="felhasznalo_listaz">Listáz</button>
        </div>
        </form>
    </div>

    <div id="box_1">
        <h2>TERMÉK FELTÖLTÉSE (kizárólag Admin szerepkör)</h2>
    </div>
    <div id="box_2">
        <div class="btncontainer">
        </div>

        <form action="php\00_admin_termek.php" method="post">
            <div class="container">
                <label for="Kategoria"><b>Válassz termékkategóriát:</b></label>
                <select name="Kategoria" id="Kategoria">
                    <option value="1">Gomb</option>
                    <option value="2">Rövidáru</option>
                </select>

                <label for="TermekNev"><b>Termék név</b></label>
                <input type="text" placeholder="Termék neve" name="TermekNev" id="TermekNev" maxlength="60" required>

                <label for="GyartoNev"><b>Gyártó</b></label>
                <input type="text" placeholder="Gyártó neve" name="GyartoNev" id="GyartoNev" maxlength="100" required>

                <label for="Szin"><b>Termék színe</b></label>
                <input type="text" placeholder="szín" name="Szin" id="Szin" maxlength="60" required>

                <label for="Meret"><b>Termék mérete (mm)</b></label>
                <input type="number" placeholder="méret/szélesség" name="Meret" id="Meret" min="1" max="1000" required></br></br>

                <label for="Mennyiseg"><b>Raktárkészlet mennyiség (méter)</b></label>
                <input type="text" placeholder="Mennyiség" name="Mennyiseg" id="Mennyiseg" required>

                <label for="Megjegyzes"><b>Megjegyzés</b></label>
                <input type="text" placeholder="megjegyzés" name="Megjegyzes" id="Megjegyzes" maxlength="250" required>

                <label for="Kep"><b>Képfájl</b></label>
                <input type="file" placeholder="Válassz egy képfájlt..." name="Kep" id="Kep" required></br></br>

                <label for="Ar"><b>Ár (Ft)</b></label>
                <input type="number" placeholder="termék ára" name="Ar" id="Ar" required></br></br>

                <label for="Statusz"><b>Termék készleten van</b></label>
                <input type="checkbox" placeholder="státusz" name="Statusz" id="Statusz" value="1" required></br>

                <button type="submit" class="button" type="button" name="termek_letrehoz" >Létrehoz</button>
            </div>
        </form>
    </div>

    <div id="box_1">
        <h2>TERMÉKEK SZERKESZTÉSE KERESÉS ALAPJÁN <br>(kizárólag Admin szerepkör)</h2>
        <div id="box_2">
            <h1 style="text-align: center">Egyszerű keresés:</h1>
            <div class="btncontainer">
                <div class="btnvertical-center">
                    <form class="example" action="php/01_admin_termek_keres.php" method="get">
                        <!--<label for="szoveg">Keresett kifejezés:</label>-->
                        <input type="text" id="szoveg" placeholder="Szerkesztett termék neve" name="szoveg" value="">
                        <button id="keres" type="submit" name="kuld" onclick="button_click()" value="Keress!"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <h2>TERMÉKEK SZERKESZTÉSE LISTÁZÁS ALAPJÁN <br>(kizárólag Admin szerepkör)</h2>
        <form action="php\00_admin_termek.php" method="post">
            <div id="content">
                <div id="box_2">
                    <h1 style="text-align: center">
                        <button type="submit" class="button" type="button" name="termek_listaz">Összes termék listázása</button>
                    </h1>
                </div>
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

            <label for="name"><b>Felhasználó</b></label>
            <input type="text" placeholder="felhasználóinév" name="name" id="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="email cím" name="email" id="email" required>

            <label for="uzenet"><b>Üzenet</b></label>
            <input type="text" placeholder="üzenet" name="uzenet" id="uzenet" required>

            <label for="datum"><b>Dátum</b></label>
            <input type="date" name="datum" id="datum" >

            <label for="status"><b>Státusz</b></label>
            <select type="text" placeholder="státusz" name="status" id="status" required>
                <option value="1">aktiv</option>
                <option value="2">passziv</option>
            </select>

            <button type="submit" class="button" type="button" name="bejegyzes_letrehoz" >Létrehoz</button>
            <button type="submit" class="button" type="button" name="bejegyzes_modosit" >Módosít</button>
            <button type="submit" class="button" type="button" name="bejegyzes_torol">Töröl</button>
            <button type="submit" class="button" type="button" name="bejegyzes_listaz">Listáz</button>
        </div>
        </form>
    </div>


</div>
<!---->
<?php include "./footer.php" ?>
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
