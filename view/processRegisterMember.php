<?php
$title = "GAMERS";
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

    <h1>al's love of games</h1>

<?php
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$age = $_POST['Age'];
$email = $_POST['Email'];

if (empty($firstName)) {
    echo "<h3>You must provide a first name to be registered.</h3>";
} else {
    if (empty($age) || $age < 18) {
        $msg = "You must be at least 18 years old to join.";
    } else if (empty ($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "You must provide a valid email address to register.";
    } else {
        $msg = "Welcome to the club.";
        $file = fopen('./DataFiles/members.csv', 'a+b');
        fputcsv($file,
            array($firstName, $lastName, $age, $email));

        echo "<h3>Current members are:</h3><ol>";
        rewind($file);
        while (($data = fgetcsv($file)) !== FALSE) {
            echo "<li><a href='mailto:$data[3]'>" .
                "$data[0] $data[1]</a></li>" ;
        }
        echo "</ol>";
        fclose($file);

    }
    echo "<h3>$firstName,<br/>$msg</h3>";



}



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

