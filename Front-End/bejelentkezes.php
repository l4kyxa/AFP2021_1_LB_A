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
                <a href="rovidaru.php"><i class="fa fa-fw fa-hand-o-right"></i> Rövidáru</a>
                <a href="gombok.php"><i class="fa fa-fw fa-hand-o-right"></i> Gomb</a>
                <a  href="akciokkifutok.php"><i class="fa fa-fw fa-hand-o-right"></i> Akciós / kifutó
                    termékek</a>
            </div>
        </div>
        <a href="uzenofal.php"><i class="fa fa-fw fa-commenting-o"></i> ÜZENŐFAL</a>
        <a href="kapcsolat.php"><i class="fa fa-fw fa-vcard-o"></i> KAPCSOLAT</a>
        <a class="active" href="bejelentkezes.php"><i class="fa fa-fw fa-sign-in"></i> BEJELENTKEZÉS</a>
        <a href="kosar.php"><i class="fa fa-fw fa-shopping-cart"></i> KOSÁR</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
</div>

<!---->
<div id="content">
    <!---->
    <div id="box_2">
        <h2>Bejelentkezés</h2>
    </div>
    <div id="box_1">
      <hr>
    </div>

    <div id="box_2">
    <form action="#" method="#">
            <div class="imgcontainer">
                <!--    <img src="images\avatar.png" alt="Avatar" class="avatar">  -->
            </div>

            <div class="container">
                <label for="felhasznaloinev"><b>Felhasználói név</b></label>
                <input type="text" placeholder="adja meg a felhasználói nevét" name="felhasznaloinev" required>

                <label for="jelszo"><b>Jelszó</b></label>
                <input type="password" placeholder="adja meg a jelszavát" name="jelszo" required>
                <div class="btncontainer">
                    <div class="btnvertical-center">
                        <button type="submit" class="registerbtn" onclick="button_click()">BELÉP</button>
                    </div>
                </div>

                <label>
                    <br>

                    <input type="checkbox" checked="checked" name="remember"> emlékezz Rám
                </label>
            </div>
            <br>
            <div class="container">
                <div class="btncontainer">
                    <div class="btnvertical-center">
                <a href="regisztracio.php">regisztráció</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
    </div>
    <!-- -->
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
