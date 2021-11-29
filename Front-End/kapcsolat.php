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
    <!---->
    <div id="box_2">
        <h2>Kapcsolatfelvétel</h2>
        <div class="container">
            <form action="php\00_kapcsolat.php" method="post">

                <label for="felhasznaloinev"><b>Név</b></label>
                <input type="text" placeholder="név" name="felhasznaloinev" id="felhasznaloinev" required>

                <label for="targy"><b>Tárgy</b></label>
                <input type="text" placeholder="tárgy" name="targy" id="targy" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="email cím" name="email" id="email" required>

                <label for="uzenet">Üzenet</label>
                <textarea id="uzenet" name="uzenet" placeholder="ide írhatja üzenetét"
                          style="height:200px"></textarea>
                <!-- <input type="submit" value="Submit">-->
                <div class="btncontainer">
                    <div class="btnvertical-center">
                <button type="submit" class="registerbtn" name="submit4">Küldés</button>
                    </div>
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
    <script src="script/lapteteje.js"></script>
    <script src="script/menugomb.js"></script>
    <script src="script/button_funk.js"></script>
</body>
</html>
