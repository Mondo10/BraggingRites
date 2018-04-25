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
</div>

<script>
    function gameLookup(){
        document.location =
            "../controller/controller.php?action=GameDetails&GameID=" +
            $('#GameSelect').val();
    }
    function gameLookup(){
        document.location =
            "../controller/controller.php?action=GameDetails&GameID=" +
            $('#GameSelect').val();
    }






    
</script>

