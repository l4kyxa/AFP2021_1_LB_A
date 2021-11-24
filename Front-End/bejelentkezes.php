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
            <div class="imgcontainer">
                <!--    <img src="images\avatar.png" alt="Avatar" class="avatar">  -->
            </div>



        <form action="php\00_bejelentkezes.php" method="post">
            <div class="container">
                <label for="felhasznaloinev"><b>Felhasználói név</b></label>
                <input type="text" placeholder="adja meg a felhasználói nevét" name="felhasznaloinev">

                <label for="jelszo"><b>Jelszó</b></label>
                <input type="password" placeholder="adja meg a jelszavát" name="jelszo" >
                <div class="btncontainer">
                    <div class="btnvertical-center">
                        <button type="submit" class="registerbtn" name="submit2" >BELÉP</button>
                    </div>
                </div>


                    <br>


                    <input type="checkbox" checked="" name="remember">
                <label for="remember">  emlékezz rám</label><br>
            </div>
        </form>

            <br>
            <div class="container">
                <div class="btncontainer">
                    <div class="btnvertical-center">
                <a href="regisztracio.php">regisztráció</a>
                    </div>
                </div>
            </div>


    </div>
    <?php
    if(isset($_GET["error"]))
    {
        if ($_GET["error"] == "wronglogin")
        {
            echo "<p>Helytelen bejelentkezési adatok!</p>";
        }
    }
    ?>
    </div>
    <!-- -->
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
