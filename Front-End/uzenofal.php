<?php
    date_default_timezone_set('Europe/Budapest');
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
<?php include "./header.php" ?>
<!---->
<div id="content">
    <!--m-->

    <div id="box_2">
        <h2>Üzenőfal</h2>

            <?php

            require_once 'php/dbhandler.php';
            
            $sql = "SELECT Uzenet, Datum, Neve FROM Bejegyzes";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '<div class="container darker">'.
                '<img src="images/avatar2.png" alt="Avatar" class="left">'.
                '<p class="left">'."Megjegyzés :". $row["Uzenet"].'</p>'.
                '<p class="left">'. "Felhasználó: ". $row["Neve"].'</p>'.
                '<span class="time-left">'. $row["Datum"]. '</span>'.
                '</div>'; 
              }
            } else {
              echo "Nincsenek üzenetek";
            }
            $conn->close();      
            ?>

    </div>

    <div id="box_1">
        <hr>
    </div>

    <!---->
    <?php
    if (isset($_SESSION["useruid"]))
    { echo
    '<div id="box_2">'.
        '<h2>Üzenet</h2>'.
        '<div class="container">'.
            '<form action="php\00_uzenofal.php" method="post">'.
                "<input type='hidden' name='datum' value='".date('Y/m/d H:i:s')."'/>".
                '<label for="uzenet">'.'Üzenet'.'</label>'.
                '<textarea id="uzenet" name="uzenet" placeholder="ide írhatja üzenetét" style="height:200px"></textarea>'.
                '<!-- <input type="submit" value="Submit">-->'.
                '<div class="btncontainer">'.
                    '<div class="btnvertical-center">'.
                '<button type="submit" class="registerbtn" name="submit3" >Küldés</button>'.
                    '</div>'.
                '</div>'.
            '</form>'.
        '</div>'.
    '</div>';
    }
    ?>
    <?php
    if(isset($_GET["error"]))
    {
        if ($_GET["error"] == "stmtfailed")
        {
            echo "<p>Valami nem stimmel!</p>";
        }
        if ($_GET["error"] == "wrongusername")
        {
            echo "<p>Felhasználónév nem megfelelő!</p>";
        }
        else if ($_GET["error"] == "wrongemail")
        {
            echo "<p>E-mail cím nem megfelelő!</p>";
        }
    }
    ?>
</div>
<!---->
<?php include "./footer.php" ?>
<!---->
<button onclick="topFunction()" id="laptetejeregomb" title="vissza a lap tetejére"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
<!-- -->
<script src="script/lapteteje.js"></script>
<script src="script/menugomb.js"></script>
<script src="script/button_funk.js"></script>
</body>
</html>
