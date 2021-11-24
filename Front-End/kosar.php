
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
        <a class="active" href="kosar.php"><i class="fa fa-fw fa-shopping-cart"></i> KOSÁR</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
</div>

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
