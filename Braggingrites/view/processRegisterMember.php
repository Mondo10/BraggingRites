<?php
	$title = "Beer Club Registration";
	require '../view/headerInclude.php';
?>
<h1>Beer of the Month Club Registration</h1>

<?php

	echo "<h3>Current members are:</h3><ol>";
	foreach ($memberArray as $member) {
		echo "<li><a href='mailto:$member[3]'>" .
			"$member[0] $member[1]</a></li>" ;
	}
	echo "</ol>";

	echo "<h3>$firstName,<br/>$msg</h3>";	
	
	require '../view/footerInclude.php';
?>