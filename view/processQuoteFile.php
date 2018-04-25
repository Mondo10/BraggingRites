<?php
$title = "File Upload";
?>
    <!-- Bootstrap core CSS -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="../js/Bragsite.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/custom.css.css">
    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 5rem;
            background-color: #495057;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
    </head>

    <body>
    <?php require_once('navbar.php'); ?>
    <h1>File Upload!</h1>

<?php
$uploadfile = './Quotes/' . $_FILES['userfile']['name'];
if (file_exists($uploadfile)) {
    $message = "The file was replaced successfully";
} else {
    $message = "The file was successfully uploaded";
}
if (move_uploaded_file($_FILES['userfile']['tmp_name'],
    $uploadfile)) {
    echo "<p>$message.</p>";
} else if ($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE) {
    echo "<p>Please choose a file first and then try again...</p>";
} else if ($_FILES['userfile']['size'] > 1000000) {
    echo "<p>Please choose a file smaller than 1MB and then try again...</p>";
} else {
    echo "File Upload Error\n Debugging info:";
    print_r($_FILES);
}
?>

<?php
?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
    <!-- Holder.js for placeholder images -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
