
<div id="header_kezdolap">
    <div class="topnav" id="myTopnav">
        <a class="logo" href="kezdolap.php"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></a>
        <a class="" href="kezdolap.php"><i class="fa fa-fw fa-home"></i> KEZDŐLAP</a>
        <a href="rolunk.php"><i class="fa fa-fw fa-user-circle-o"></i> RÓLUNK</a>
        <a href="termekek.php"><i class="fa fa-fw fa-slack"></i> TERMÉKEK</a>
        <a href="uzenofal.php"><i class="fa fa-fw fa-commenting-o"></i> ÜZENŐFAL</a>
        <a href="kapcsolat.php"><i class="fa fa-fw fa-vcard-o"></i> KAPCSOLAT</a>
        <a href="bejelentkezes.php"><i class="fa fa-fw fa-sign-in"></i> BEJELENTKEZÉS</a>
        <a href="kosar.php"><i class="fa fa-fw fa-shopping-cart"></i> KOSÁR</a>


        <?php
        if (isset($_SESSION["useruid"]))
        {
            //echo "<a href='profile.php'>Profile page</a>";
            echo '<a href=""><i class="fa fa-fw fa-user"></i>';
        }
        else
        {
           // echo "<a href='notprofile.php'>Not profile</a>";
            echo '<a href=""><i class="fa fa-fw fa-user-times"></i>';
        }
        ?>


        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>

    </div>
    <div class="pic">
        <div class="centered">
            <marquee behavior="scroll" direction="left"
                     onmouseover="this.stop();"
                     onmouseout="this.start();"><h1>Üdvözöljük Gomb és Rövidáru Webáruházunkban</h1>
            </marquee>
        </div>
    </div>
</div>
