<?php


include '../view/Header.php'

    ?>

      <div class="Coleman-template">
        <h1 class = text-white>Bragging Rites </h1>
        <p class="lead">Welcome to Bragging Rites.com for everything video games! </p>
      </div>
        <div style="text-align: right; font-size: 16px;">
            <?php
                if (!loggedIn()) {
                    echo "<a href=\"../security/index.php?action=SecurityLogin&amp;RequestedPage=%2FBraggingrites%2Fsecurity%2Findex.php\">Log In</a> </a>";
                    }else {
                   echo "<a <a href=\"../security/index.php?action=SecurityLogOut\">Log Out</a>"  . $_SESSION['UserName'] . " </a>";
                }
            ?>
        </div>

        <div class="spacer"></div>

        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-third">
                <div class="w3-card w3-container w3-orange" style="min-height:460px">
                    <h3>Reviews</h3><br>
                    <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>God of War for PS4</p>
                    <p>A Gorgeous, unforgettable</p>
                    <p> Adventure with a </p>
                    <p>Perfect 10 out of 10 on IGN</p>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container w3-orange" style="min-height:460px">
                    <h3>Updates</h3><br>
                    <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>Fortnite Servers</p>
                    <p>Currently down</p>
                    <p>for Emergency Maintenace</p>

                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container w3-orange" style="min-height:460px">
                    <h3>Local Tournament</h3><br>
                    <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>The Techfloor Pokemon</p>
                    <p>Tournament is taking</p>
                    <p>Place on 4/7/18</p>
                    <p>@ high noon</p>
                </div>
            </div>
        </div>

        <div class="w3-row-padding w3-center w3-margin-top">
            <div class="w3-third">
                <div class="w3-card w3-container w3-orange" style="min-height:460px">
                    <h3>Computer Gaming Build</h3><br>
                    <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>Intel Core i5</p>
                    <p>GeForce GTX 1070 6GB</p>
                    <p>MSI Z370-A Pro Motherboard</p>
                    <p>DDR4-2400 8GB (2x4GB) RAM</p>
                    <p>Crucial MX300 275GB Solid state drive</p>
                    <p>EVGA 450W 80+ Bronze PSU Power Supply</p>
                    <p>Fractal Design Focus G Case</p>

                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container w3-orange" style="min-height:460px">
                    <h3>Gaming News</h3><br>
                    <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>Standard CSS only</p>
                    <p>Easy to learn</p>
                    <p>No need for jQuery</p>
                    <p>No JavaScript library</p>
                </div>
            </div>

            <div class="w3-third">
                <div class="w3-card w3-container w3-orange" style="min-height:460px">
                    <h3>BG Community</h3><br>
                    <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
                    <p>Paper like design</p>
                    <p>Bold colors and shadows</p>
                    <p>Equal across platforms</p>
                    <p>Equal across devices</p>
                </div>
            </div>
        </div>



<?php

include '../view/Footer.php'
?>
