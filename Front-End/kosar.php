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
   <h2>Kosár</h2>
</div>
    <div id="box_1">
        <hr>
    </div>
    <div id="box_2">

        <div class="flex-item">
            <div class="card">
                <img src="images\P_00.jpg" style="width:100%">
                <h1>db_name_1</h1>
                <p>db_price_1</p>
                <form action="php\00_kosar_torol.php" method="post">
                    <p><button type="submit">töröl</button></p>
                </form>
            </div>
        </div>

        <div class="flex-item">
            <div class="card">
                <img src="images\P_00.jpg" style="width:100%">
                <h1>db_name_1</h1>
                <p>db_price_1</p>
                <form action="php\00_kosar_torol.php" method="post">
                    <p><button type="submit">töröl</button></p>
                </form>
            </div>
        </div>

        <div class="flex-item">
            <div class="card">
                <img src="images\P_00.jpg" style="width:100%">
                <h1>db_name_3</h1>
                <p>db_price_3</p>
                <form action="php\00_kosar_torol.php" method="post">
                <p><button type="submit">töröl</button></p>
                </form>
            </div>
        </div>
        <form action="php\00_kosar_rendel.php" method="post">
        <div class="btncontainer">
            <div class="btnvertical-center">
                <button class="button" type="submit" >Rendelés
                </button>
            </div>
        </div>
        </form>
    </div>
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
