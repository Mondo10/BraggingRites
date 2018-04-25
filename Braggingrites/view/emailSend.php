<?php
	require_once 'Mail.php';
	$title = "Send Emails";
	require '../view/headerInclude.php';
?>
<h1>Sending Member Emails</h1>

<?php

	$options = array();
	$options['host'] = 'ssl://smtp.gmail.com';
	$options['port'] = 465;
	$options['auth'] = true;
	$options['username'] = 'CIS370Server@gmail.com';
	$options['password'] = 'CISDepartment';
	$mailer = Mail::factory('smtp', $options);

	$headers = array ();
	$headers['From'] = 'Jon ODonnell <CIS370Server@gmail.com>';
	$headers['Subject'] = 'Beer of the Month Club Newsletter';
	$headers['Content-type'] = 'text/html';

	// $recipients is an array of addresses,$message is the html
	$message = "<html><head></head><body><h1>Beer of the Month is at <a href='http://www.sailfishbrewingco.com/'>Sailfish Brewery</a><h1>  </body></html>";
	$recipients = array('jodonnell@clarion.edu');
	
    echo "<h3>Sending Email To:</h3><ol>";
		$file = fopen('../DataFiles/members.csv', 'rb');
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
	require '../view/footerInclude.php';
?>
