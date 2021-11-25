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

        <form action="#" method="post">
            <div class="container">

                <div id="box_2">
                    <h2>Lakcím</h2>
                </div>

                <label for="Lakcim_Irszam"><b>Irányítószám</b></label>
                <input type="text" placeholder="lakcím-irányítószám" name="Lakcim_Irszam" id="Lakcim_Irszam" required>

                <label for="Lakcim_Helyiseg"><b>Helyiség</b></label>
                <input type="text" placeholder="lakcím-helyiség" name="Lakcim_Helyiseg" id="Lakcim_Helyiseg" required>

                <label for="Lakcim_Utca"><b>Utca</b></label>
                <input type="text" placeholder="lakcím-utca" name="Lakcim_Utca" id="Lakcim_Utca" required>

                <label for="Lakcim_Hsz"><b>Házszám</b></label>
                <input type="text" placeholder="lakcím-házszám" name="Lakcim_Hsz" id="Lakcim_Hsz" required>


                <div id="box_2">
                    <h2>Szállítási cím</h2>
                </div>

                <label for="Szallcim_Irszam"><b>Irányítószám</b></label>
                <input type="text" placeholder="szállítási cím-irányítószám" name="Szallcim_Irszam" id="Szallcim_Irszam" required>

                <label for="Szallcim_Helyiseg"><b>Helyiség</b></label>
                <input type="text" placeholder="szállítási cím-helyiség" name="Szallcim_Helyiseg" id="Szallcim_Helyiseg" required>

                <label for="Szallcim_Utca"><b>Utca</b></label>
                <input type="text" placeholder="szállítási cím-utca" name="Szallcim_Utca" id="Szallcim_Utca" required>

                <label for="Szallcim_Hsz"><b>Házszám</b></label>
                <input type="text" placeholder="szállítási cím-házszám" name="Szallcim_Hsz" id="Szallim_Hsz" required>

            </div>
        </form>



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
