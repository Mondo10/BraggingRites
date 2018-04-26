<?php
$title = "add game";
require '../view/Header.php'
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="BraggingRites">
    <link rel="icon" href="favicon.ico">

    <title>BraggingRites</title>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="../js/Bragsite.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/custom.css">



</head>
<div class="detailForm">
    <h1>Add Game</h1>

    <form id="GameForm" action="../controller/controller.php?action=ProcessAddEdit" method="post"
          onsubmit="return validateForm();">
        <div class="formRow">
            <label for="Name">Game Name:</label>
            <input type="text" name="Name" id="Name" value="<?php echo $name ?>" required
                   required size="20" maxlength="30" autofocus/>
        </div>
        <div class="formRow">
            <label for="DateRelease">Release Date:</label>

            <input type="date" name="DateRelease" id="DateRelease" value="<?php echo $DateRelease; ?>"/>

        </div>
        <div class="formRow">
            <label for="MetaCriticScore">McScore:</label>
            <input type="number" name="MetacriticScore" id="MetaCriticScore" value="<?php echo $MetacriticScore ?>"
                   min="0" max="100"/>
        </div>
        <div class="formRow">
            <label for="Price">Price:</label>
            <input type="number" name="Price" id="Price" value="<?php echo $Price ?>"
                   min="0" max="100"/>
        </div>
        <div class="formRow">
            <label for="HavePlayed">Have Played:</label>
            <input type="checkbox" name="HavePlayed" id="HavePlayed" <?php if ($HavePlayed == 'Y') echo 'checked' ?> />
        </div>
        <div class="formRow">
            <label for="Genre">Genre:</label>
            <input type="text" name="Genre" id="Genre" value="<?php echo $Genre ?>"/>
        </div>
        <div class="formRow">
            <label for="ESRB">ESRB:</label>
            <input type="text" name="ESRB" id="ESRB" value="<?php echo $ESRB ?>"/>
        </div>

        <div class="formRow">
            <input type="submit" name="SubmitButton" value="Save" />
        </div>
    </form>


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
    <?php
    if (!empty($errors)) {
        echo "alert('Please correct the following errors:\\n$errors');";
    }
    ?>

    function validateForm() {
        var ibu = $('#IBU').val();
        var style = $('#Style').val();

        if (style == 'IPA' && ibu < 20) {
            alert('IPAs should be more bitter than that.');
            $('#Style').select();
            return false;
        }
        return true;
    }
</script>


