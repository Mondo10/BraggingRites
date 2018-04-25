<?php
require_once 'Mail.php';
$title = "Send Emails";
?>

<!-- Bootstrap core CSS -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="./js/Bragsite.js"></script>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="./css/bootstrap.css">
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
<div id="navbar">
    <script>
        window.onload=loadNavBar();
    </script>
</div>

<h1>Sending Member Emails</h1>

<?php

$options = array();
$options['host'] = 'ssl://smtp.gmail.com';
$options['port'] = 465;
$options['auth'] = true;
$options['username'] = 'aanacojar@gmail.com';
$options['password'] = 'Fthoseboceskids';
$mailer = Mail::factory('smtp', $options);

$headers = array ();
$headers['From'] = 'Al <aanacojar@gmail.com>';
$headers['Subject'] = 'vidya gmaes';
$headers['Content-type'] = 'text/html';

// $recipients is an array of addresses,$message is the html
$message = "<html><head></head><body><h1>video games are cool <h1>  </body></html>";
$recipients = array('alexanderson23@hotmail.com');

echo "<h3>Sending Email To:</h3><ol>";
$file = fopen('./DataFiles/members.csv', 'rb');
while (($data = fgetcsv($file)) !== FALSE) {
    echo "<li>$data[0] $data[1] ($data[3])</li>" ;
    $recipients[] = $data[3];
}
echo "</ol>";
fclose($file);

$result = $mailer->send($recipients, $headers, $message);

if (PEAR::isError($result)) {
    echo 'Error sending email.';
} else {
    echo 'Email Sent Successfully.';
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
