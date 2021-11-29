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
   <h2>Regisztráció</h2>
</div>
    <div id="box_1">
        <hr>
    </div>
    <div id="box_2">
        <form action="php\00_regisztracio.php" method="post">
        <div class="container">
            <label for="felhasznaloinev"><b>Név</b></label>
            <input type="text" placeholder="Felhasználói név" name="felhasznaloinev" id="felhasznaloinev" required>

            <label for="email"><b>E-mail cím</b></label>
            <input type="text" placeholder="E-mail cím" name="email" id="email" required>

            <label for="jelszo"><b>Jelszó</b></label>
            <input type="password" placeholder="Jelszó" name="jelszo" id="jelszo" required>

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
            echo "<p>Felhasználónév vagy e-mail cím foglalt!</p>";
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