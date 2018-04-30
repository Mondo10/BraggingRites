<!DOCTYPE html>
<html lang="en">
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
<body class = "Coleman-template">
<?php require_once('navbar.php'); ?>

<div class="listForm">
    <h1>Games</h1>

    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Genre</th>
            <th>Metacritic Score</th>
            <th>ERSB</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($results as $row){ ?>
        <tr>
            <td>
                <a href="../controller/controller.php?action=GameDetails&GameID=<?php echo $row['GameID'] ?>">
                <?php echo $row ['Name']?>
                </a>

            </td>
            <td> <?php echo $row ['Genre']?></td>
             <td> <?php echo $row ['MetacriticScore']?></td>
              <td> <?php echo $row ['ERSB']?></td>
        </tr>
                <?php }?>

        </tbody>
    </table>

</div>






</body>


</html>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
<!-- Holder.js for placeholder images -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>


