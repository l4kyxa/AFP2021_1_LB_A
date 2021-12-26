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

    <div id="box_2">
        <h2>Termékek</h2>
    </div>
    <!---->
    <div id="box_1_no_padd">

        <div class="tab">
            <button id="AA" class="tablinks" onmouseover="openC(event, 'A')">Gomb</button>
            <button id="AA" class="tablinks" onmouseover="openC(event, 'BB')">Rövidáru</button>
        </div>

        <div id="A" class="tabcontent">
            <div class="btncontainer">
                <div class="btnvertical-center">
                    <form class="example" action="php/01_user_termek_keres.php" method="get">
                        <input type="text" id="szoveg" placeholder="keresés" name="szoveg" value="">
                        <button id="keres" type="submit" name="kuld" onclick="button_click()" value="Keress!"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <!--GOMB PANEL-->
            <div class="flex-container">

                <div class="flex-item">
                    <form action="#">
                        <label for="A">Főkategória:</label>
                        <select name="A" id="B">
                            <option value="1">összes</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </form>
                </div>

                <div class="flex-item">
                    <form action="#">
                        <label for="A">Alkategória:</label>
                        <select name="A" id="B">
                            <option value="1">összes</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </form>
                </div>

            </div>


            <div class="flex-container">

                <div class="flex-item">
                    <form action="#">
                        <label for="A">Gyártó:</label>
                        <select name="A" id="B">
                            <option value="1">összes</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </form>
                </div>

                <div class="flex-item">
                    <form action="#">
                        <label for="A">Szín:</label>
                        <select name="A" id="B">
                            <option value="1">összes</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </form>
                </div>

            </div>


            <div class="flex-container">

                <div class="flex-item">
                    <form action="#">
                        <label for="A">Méret/Szélesség:</label>
                        <select name="A" id="B">
                            <option value="1">összes</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </form>
                </div>

                <div class="flex-item">
                    <form action="#">
                        <label for="A">Mennyiség:</label>
                        <select name="A" id="B">
                            <option value="1">összes</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </form>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-item">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                    <label>mutassa a készleten nem megtalálható termékeket is.</label>
                </div>
                <div class="flex-item">
                </div>
            </div>


             <hr>
             <br><br>

                 <div class="btncontainer">
                     <div class="btnvertical-center">
                         <button class="button" type="button" onclick="button_click()">Keresés </button>
                     </div>
                 </div>

         </div>

         <!--GOMB PANEL VÉGE-->

        <!--RÖVIDÁRU PANEL-->
            <div id="BB" class="tabcontent">
                <div class="btncontainer">
                    <div class="btnvertical-center">
                        <form class="example" action="#">
                            <input type="text" placeholder="keresés" name="search">
                            <button id="keres" type="submit" onclick="button_click()"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <br><br>
                <hr>

                <div class="flex-container">

                    <div class="flex-item">
                        <form action="#">
                            <label for="A">Főkategória:</label>
                            <select name="A" id="B">
                                <option value="1">összes</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </form>
                    </div>

                    <div class="flex-item">
                        <form action="#">
                            <label for="A">Alkategória:</label>
                            <select name="A" id="B">
                                <option value="1">összes</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </form>
                    </div>

                </div>


                <div class="flex-container">

                    <div class="flex-item">
                        <form action="#">
                            <label for="A">Gyártó:</label>
                            <select name="A" id="B">
                                <option value="1">összes</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </form>
                    </div>

                    <div class="flex-item">
                        <form action="#">
                            <label for="A">Szín:</label>
                            <select name="A" id="B">
                                <option value="1">összes</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </form>
                    </div>

                </div>


                <div class="flex-container">

                    <div class="flex-item">
                        <form action="#">
                            <label for="A">Méret/Szélesség:</label>
                            <select name="A" id="B">
                                <option value="1">összes</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </form>
                    </div>

                    <div class="flex-item">
                        <form action="#">
                            <label for="A">Mennyiség:</label>
                            <select name="A" id="B">
                                <option value="1">összes</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </form>
                    </div>

                </div>
                <div class="flex-container">
                    <div class="flex-item">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                        <label>mutassa a készleten nem megtalálható termékeket is.</label>
                    </div>
                    <div class="flex-item">
                    </div>
                </div>
                <hr>
                <br><br>

                    <div class="btncontainer">
                        <div class="btnvertical-center">
                            <button class="button" type="button" onclick="button_click()">Keresés </button>
                        </div>
                    </div>
            </div>

        <!--RÖVIDÁRU PANEL VÉGE-->
        </div>
    </div>
        <!---->
    <div id="box_2">
        <div class="flex-container">
            <div class="flex-item">
                    <h3>A Keresés Eredménye</h3>


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
                            <p><button onclick="button_click()" onclick="button_click()">kosárba rak</button></p>
                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>
<!---->
<?php include "./footer.php" ?>
<!---->
<button onclick="topFunction()" id="laptetejeregomb" title="vissza a lap tetejére"><i class="fa fa-arrow-up" aria-hidden="true"></i></button
<!---->
<script src="script/lapteteje.js"></script>
<script src="script/menugomb.js"></script>
<script src="script/button_funk.js"></script>
<script src="script/termekek.js"></script>




</body>
</html>
