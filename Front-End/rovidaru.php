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
        <a href="kezdolap.php"><i class="fa fa-fw fa-home"></i> Kezdőlap</a>
        <a href="rolunk.php"><i class="fa fa-fw fa-user-circle-o"></i> RÓLUNK</a>
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-fw fa-hand-o-down"></i> TERMÉKEK</button>
            <div class="dropdown-content">
                <a class="active" href="rovidaru.php"><i class="fa fa-fw fa-hand-o-right"></i> Rövidáru</a>
                <a href="gombok.php"><i class="fa fa-fw fa-hand-o-right"></i> Gomb</a>
                <a href="akciokkifutok.php"><i class="fa fa-fw fa-hand-o-right"></i> Akciós / kifutó termékek</a>
            </div>
        </div>
        <a href="uzenofal.php"><i class="fa fa-fw fa-commenting-o"></i> ÜZENŐFAL</a>
        <a href="kapcsolat.php"><i class="fa fa-fw fa-vcard-o"></i> KAPCSOLAT</a>
        <a href="bejelentkezes.php"><i class="fa fa-fw fa-sign-in"></i> BEJELENTKEZÉS</a>
        <a href="kosar.php"><i class="fa fa-fw fa-shopping-cart"></i> KOSÁR</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
</div>
<!---->
<div id="content">

    <div id="box_2">
        <h2>Termékek/Rövidáru</h2>
    </div>
    <!---->
    <div id="box_1">
        <div class="btncontainer">
            <div class="btnvertical-center">
                <form class="example" action="#">
                    <input type="text" placeholder="keresés" name="search">
                    <button id="keres" type="submit"onclick="button_click()"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!---->

    <div id="box_2">
        <div class="flex-container">
            <div class="flex-item-1">
                <div class="sidenav">
                    <button class="dropdown-btn">Szalagok <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ Szatén szalag</a>
                        <a href="#" onclick="button_click()"> ➤ Ripsz szalag</a>
                        <a href="#" onclick="button_click()"> ➤ Nemzeti színű szalag</a>
                        <a href="#" onclick="button_click()"> ➤ Koptató szalag</a>
                        <a href="#" onclick="button_click()"> ➤ Függönybehúzó szalag</a>
                        <a href="#" onclick="button_click()"> ➤ Danubia szalag</a>
                        <a href="#" onclick="button_click()"> ➤ Heveder</a>
                        <a href="#" onclick="button_click()"> ➤ Köpper szalag</a>
                        <a href="#" onclick="button_click()"> ➤ Babpertli</a>
                        <a href="#" onclick="button_click()"> ➤ Vetex</a>
                        <a href="#" onclick="button_click()"> ➤ Mérőszalag</a>
                        <a href="#" onclick="button_click()"> ➤ Függönybehúzó szalag</a>
                        <button class="dropdown-btn">Ferdepánt<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-container">
                            <a href="#" onclick="button_click()"> ➤ Pamut ferdepánt</a>
                            <a href="#" onclick="button_click()"> ➤ Szatén ferdepánt</a>
                        </div>
                    </div>

                    <button class="dropdown-btn">Gumiszalag<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ Csőgumi</a>
                        <a href="#" onclick="button_click()"> ➤ Szövött gumi</a>
                        <a href="#" onclick="button_click()"> ➤ Kötött gumi</a>
                        <a href="#" onclick="button_click()"> ➤ Gomblyukas gumi</a>
                        <a href="#" onclick="button_click()"> ➤ Ált. célú - szájmaszkhoz</a>
                    </div>

                    <button class="dropdown-btn">Zsinór<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ reluxa zsinór</a>
                        <a href="#" onclick="button_click()"> ➤ Műszálas zsinór</a>
                    </div>

                    <button class="dropdown-btn">Cérna<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ Ált. varrócérna Moon- 120</a>
                        <a href="#" onclick="button_click()"> ➤ DOR-TAK, sárga orsós 80</a>
                        <a href="#" onclick="button_click()"> ➤ Gépselyem cérna</a>
                        <button class="dropdown-btn">Bőrvarró cérna<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-container">
                            <a href="#" onclick="button_click()"> ➤ TYTAN 60, 120 m</a>
                        </div>
                    </div>

                    <button class="dropdown-btn">Hímzőfonal<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ Puppets perlé pamut</a>
                        <a href="#" onclick="button_click()"> ➤ Puppets mouliné osztott</a>
                    </div>

                    <button class="dropdown-btn">Varrótű<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ Horgolótű</a>
                        <a href="#" onclick="button_click()"> ➤ Kötőtű</a>
                        <a href="#" onclick="button_click()"> ➤ Kárpitostű</a>
                        <a href="#" onclick="button_click()"> ➤ Zsákvarrótű</a>
                        <a href="#" onclick="button_click()"> ➤ Bőrvarrótű</a>
                    </div>

                    <button class="dropdown-btn">Gombostű</button>

                    <button class="dropdown-btn">Tűbehúzó<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ Fém tűbehúzó</a>
                        <a href="#" onclick="button_click()"> ➤ Műanyag tűbehúzó</a>
                    </div>

                    <button class="dropdown-btn">Ruházati kiegészítők<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <button class="dropdown-btn"> ➤ Csatok<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-container">
                            <a href="#" onclick="button_click()"> ➤ Övcsat</a>
                            <a href="#" onclick="button_click()"> ➤ Táska csat</a>
                        </div>
                        <a href="#" onclick="button_click()"> ➤ Biztosítótű</a>
                        <a href="#" onclick="button_click()"> ➤ Párizsi kapocs</a>
                        <a href="#" onclick="button_click()"> ➤ Cipzár</a>
                        <a href="#" onclick="button_click()"> ➤ Cipőfűzők</a>
                        <a href="#" onclick="button_click()"> ➤ Tépőzár</a>
                        <a href="#" onclick="button_click()"> ➤ Nadrágtartó kiegészííők</a>
                        <a href="#" onclick="button_click()"> ➤ Folt cimkék</a>
                        <a href="#" onclick="button_click()"> ➤ Ovis jelek</a>
                    </div>

                    <button class="dropdown-btn">Varrógép kiegészítők<i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-container">
                        <a href="#" onclick="button_click()"> ➤ Varrógép tű</a>
                        <a href="#" onclick="button_click()"> ➤ Varrógép orsó</a>
                    </div>
                </div>
            </div>
            <!---->
            <div class="flex-item-2">
                <div class="flex-container">
                    <div class="flex-item">
                        <div class="card">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_1</h1>
                            <p>db_price_1</p>
                            <input type="number" value="1">
                            <p><button onclick="button_click()">kosárba rak</button></p>
                        </div>
                    </div>
                    <div class="flex-item">
                        <div class="card">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_2</h1>
                            <p>db_price_2</p>
                            <input type="number" value="1">
                            <p><button onclick="button_click()">kosárba rak</button></p>
                        </div>
                    </div>

                    <div class="flex-item">
                        <div class="card">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_3</h1>
                            <p>db_price_3</p>
                            <input type="number" value="1">
                            <p><button onclick="button_click()">kosárba rak</button></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <hr>
        <div class="flex-container">
            <div class="flex-item">
                    <h3>Rövidáru</h3>
                    <p> A szó a német Kurzware tükörfordítása. Vélhetőleg a méteráru (a méterszámra árult szövetek és egyéb
                        kelmék) ellenpárjaként alakult ki ez az elnevezés. A rövidáruk körébe a ruházati és lakástextil
                        termékek gyártásában nélkülözhetetlen kiegészítő anyagokat sorolják, mind a nagyipari, mind a kézmű-
                        vagy háziipari feldolgozáshoz.
                        A rövidárukat két csoportra osztják:
                    </p>
                    <h3> Puha rövidáruk:</h3>
                    <p>varrócérnák</p>
                    <p>kézimunkafonalak (kézikötő-, horgoló- és hímzőfonalak, háziszőttesekhez készült fonalak),</p>
                    <p> különféle szalagok,</p>
                    <p> hevederek,</p>
                    <p> fonatolt és kötött zsinórok, cipőfűzők,</p>
                    <p>paszományok,</p>
                    <p> csipkék és hímzések,</p>
                    <p>díszítő kellékek (bojtok, díszzsinórok, rojtok, sujtások stb.),</p>
                    <p> vállpárnák,</p>
                    <p> ízlapok (a ruhák hónaljában az izzadság felfogására)</p>
                    <br>
                    <h3> Kemény rövidáruk: </h3>
                    <p> ruhazáró kellékek (gombok, cipzárak, tépőzárak, nyomókapcsok és egyéb kapcsok, csatok)</p>
                    <p>varrótűk, gombostűk, biztosítótűk, hímzőtűk, fűzőtűk,</p>
                    <p>gyűszűk,</p>
                    <p> (kézi)kötő- és horgolótűk,</p>
                    <p> stoppolófa</p>
                    <br>
            </div>
        </div>
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
                    <h4 >+36-30 /... - .. - ..</h4>
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
<button onclick="topFunction()" id="laptetejeregomb" title="vissza a lap tetejére"><i class="fa fa-arrow-up" aria-hidden="true"></i></button
<!---->
<script src="script/lapteteje.js"></script>
<script src="script/menugomb.js"></script>
<script src="script/menu.js"></script>
<script src="script/button_funk.js"></script>
</body>
</html>
