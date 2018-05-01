<?php
        $title = "Game Search";
        require '../view/Header.php'
?>

<div>
<h1>Search Games</h1>

    <div class="formrow">
        <label>select a Game</label>
        <select id="GameSelect" onchange="gameLookup()">
            <option value ="0">Select a Game</option>


            <?php foreach ($results as $row) { ?>
                <option value ="<?php echo $row['GameID']?>"><?php echo $row['Name'] ?></option>
            <?php } ?>
        </select>
        <input type="button" onclick="gameLookup()" value="Search" />
    </div>
    <div class="formrow">
        <label>Search Criteria</label>
        <input type="text" id="Criteria" />
        <input type="button" value="General Search" onclick="generalSearch()"/>
    </div>

    <div class"formrow">
         <a href="../controller/controller.php?action=listGames&ListType=ERSB">Mature Rated</a>
    </div>
    <div class"formrow">
        <a href="../controller/controller.php?action=listGames&ListType=Haveplayed">Have Played </a>
    </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<!-- Holder.js for placeholder images -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>


</div>

<script>
    function gameLookup(){
        document.location =
            "../controller/controller.php?action=GameDetails&GameID=" +
            $('#GameSelect').val();
    }
    function generalSearch(){
        document.location =
            "../controller/controller.php?action=listGames&ListType=GeneralSearch&Criteria=" +
            $('#Criteria').val();
    }

</script>

