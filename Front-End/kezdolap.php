<?php
    session_start();
    ?>
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
<div id="header_kezdolap">
    <div class="topnav" id="myTopnav">
        <a class="logo" href="kezdolap.php"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></a>
        <a class="active" href="kezdolap.php"><i class="fa fa-fw fa-home"></i> KEZDŐLAP</a>
        <a href="rolunk.php"><i class="fa fa-fw fa-user-circle-o"></i> RÓLUNK</a>
        <a href="termekek.php"><i class="fa fa-fw fa-slack"></i> TERMÉKEK</a>
        <a href="uzenofal.php"><i class="fa fa-fw fa-commenting-o"></i> ÜZENŐFAL</a>
        <a href="kapcsolat.php"><i class="fa fa-fw fa-vcard-o"></i> KAPCSOLAT</a>
        <a href="bejelentkezes.php"><i class="fa fa-fw fa-sign-in"></i> BEJELENTKEZÉS</a>
        <a href="kosar.php"><i class="fa fa-fw fa-shopping-cart"></i> KOSÁR</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>

    </div>
    <div class="pic">
        <div class="centered">
            <marquee behavior="scroll" direction="left"
                     onmouseover="this.stop();"
                     onmouseout="this.start();"><h1>Üdvözöljük Gomb és Rövidáru Webáruházunkban</h1>
            </marquee>
        </div>
    </div>
</div>
<!---->
<div id="content">
    <div id="box_2">
        <h2>AKCIÓS AJÁNLATAINK:</h2>
        <div class="slideshow-container">
            <!--1-->
            <div class="mySlides fade">
                <div class="numbertext">
                    Aktuális Akciós Ajánlatok
                </div>
                <div class="flex-container">

                    <div class="flex-item">

                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_1</h1>
                            <p>db_price_1</p>

                    </div>

                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_2</h1>
                            <p>db_price_2</p>

                    </div>

                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_3</h1>
                            <p>db_price_3</p>
                    </div>
                </div>

            </div>

            <!--2-->
            <div class="mySlides fade">
                <div class="numbertext">
                    Heti Akciós Ajánlatok
                </div>
                <div class="flex-container">

                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_1</h1>
                            <p>db_price<_1</p>
                    </div>

                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_2</h1>
                            <p>db_price_2</p>
                    </div>


                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_3</h1>
                            <p>db_price_3</p>
                    </div>
                </div>
            </div>

            <!--  FADE3-->
            <div class="mySlides fade">
                <div class="numbertext">
                    Szezonális Akciós Ajánlatok
                </div>
                <div class="flex-container">

                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_1</h1>
                            <p>db_price_1</p>
                    </div>

                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_2</h1>
                            <p>db_price_2</p>
                    </div>


                    <div class="flex-item">
                            <img src="images\P_00.jpg" style="width:100%">
                            <h1>db_name_3</h1>
                            <p>db_price_3</p>
                    </div>
                </div>
            </div>

            <!--BUTTON-->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!--DOTS -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div class="btncontainer">
            <div class="btnvertical-center">
                <button class="button" type="button" onclick="document.location.href='termekek.php'">ÖSSZES AKCIÓ
                    MEGJELENÍTÉSE
                </button>
            </div>
        </div>
    </div>

    <!---->
    <div id="box_1">
        <h2>ÚJDONSÁGOK, KÖZELMÚLTBAN ÉRKEZETT TERMÉKEINK:</h2>

        <div class="flex-container">

            <div class="flex-item">
                    <img src="images\P_00.jpg" style="width:100%">
                    <h1>db_name_1</h1>
                    <p>db_price_1</p>
            </div>

            <div class="flex-item">
                    <img src="images\P_00.jpg" style="width:100%">
                    <h1>db_name_2</h1>
                    <p>db_price_2</p>
            </div>

            <div class="flex-item">
                    <img src="images\P_00.jpg" style="width:100%">
                    <h1>db_name_3</h1>
                    <p>db_price_3</p>
            </div>
        </div>

        <div class="btncontainer">
            <div class="btnvertical-center">
                <button class="button" type="button" onclick="document.location.href='termekek.php'">ÖSSZES TERMÉK
                    MEGJELENÍTÉSE
                </button>
            </div>
        </div>
    </div>

    <!---->
    <div id="box_2">
        <h2>NÉPSZERŰ, GYAKRAN VÁSÁROLT TERMÉKEINK:</h2>
        <div class="flex-container">

            <div class="flex-item">
                    <img src="images\P_00.jpg" style="width:100%">
                    <h1>db_name_1</h1>
                    <p>db_price_1</p>
            </div>

            <div class="flex-item">
                    <img src="images\P_00.jpg" style="width:100%">
                    <h1>db_name_2</h1>
                    <p>db_price_2</p>
            </div>

            <div class="flex-item">
                    <img src="images\P_00.jpg" style="width:100%">
                    <h1>db_name_3</h1>
                    <p>db_price_3</p>
            </div>
        </div>

        <div class="btncontainer">
            <div class="btnvertical-center">
                <button class="button" type="button" onclick="document.location.href='termekek.php'">ÖSSZES TERMÉK
                    MEGJELENÍTÉSE
                </button>
            </div>
        </div>
    </div>
</div>


<!---->
<?php include "./footer.php" ?>
<!---->
<div class="wrapper">
    <img src="#" alt="">
    <div class="content">
                <h1>FIGYELEM</h1>
        <hr>
                <p>Tájékoztatjuk, hogy az oldal „cookie”-kat (sütiket) használ. Fontos azonban tudni,
                    hogy ezek semmilyen adatot nem tárolnak illetve küldenek a látogatóról vagy böngészési szokásairól, csak is az oldal használatát segítik.
                    Weboldalunk használatával beleegyezel a cookie-k használatába. Ha mégsem, akkor az internetböngésző beállításainak megváltoztatásával a sütik küldése letiltható!.</p>
                <div class="buttons">
                    <button class="item">Elfogad</button>
                    <button onclick="document.location.href='https://www.google.com'"  class="i">Elutasít</button>
                </div>
    </div>
</div>

<script src="script/cook.js"></script>
<script src="script/szalag.js"></script>
<script src="script/lapteteje.js"></script>
<script src="script/menugomb.js"></script>
</body>
</html>
