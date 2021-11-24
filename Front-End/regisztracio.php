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
   <h2>Regisztráció</h2>
</div>
    <div id="box_1">
        <hr>
    </div>
    <div id="box_2">
        <form action="php\00_regisztracio.php" method="post">
        <div class="container">
            <label for="felhasznaloinev"><b>Név</b></label>
            <input type="text" placeholder="felhasználói név" name="felhasznaloinev" id="felhasznaloinev" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="email cím" name="email" id="email" required>

            <label for="jelszo"><b>Jelszó</b></label>
            <input type="password" placeholder="jelszó" name="jelszo" id="jelszo" required>

            <label for="jelszo_ujra"><b>Jelszó újra</b></label>
            <input type="password" placeholder="Jelszó még egyszer" name="jelszo_ujra" id="jelszo_ujra" required>
            <div class="btncontainer">
                <div class="btnvertical-center">
            <button type="submit" class="registerbtn" name="submit">KÜLDÉS</button>
                </div>
            </div>
        </div>
        </form>
    </div>

    <?php
    if(isset($_GET["error"]))
    {
        if ($_GET["error"] == "invaliduid")
        {
            echo "<p>Felhasználónév nem megfelelő!</p>";
        }
        else if ($_GET["error"] == "invalidemail")
        {
            echo "<p>E-mail cím nem megfelelő!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch")
        {
            echo "<p>Jelszavak nem egyeznek meg!</p>";
        }
        else if ($_GET["error"] == "stmtfailed")
        {
            echo "<p>Valami nem stimmel, kérlek próbáld újra!</p>";
        }
        else if ($_GET["error"] == "usernameoremailtaken")
        {
            echo "<p>Felhasználónév foglalt!</p>";
        }
        else if ($_GET["error"] == "none")
        {
            echo "<p>Sikeres regisztráció, ezzel együtt az Általános szerződési feltételek automatikusan elfogadásra kerültek!</p>";
        }
    }
    ?>

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