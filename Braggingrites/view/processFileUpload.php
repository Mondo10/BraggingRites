<?php
	$title = "File Upload";
	require '../view/headerInclude.php';
?>
<h1>File Upload</h1>

<?php
    $uploadfile = '../DataFiles/' . $_FILES['userfile']['name'];
	if (file_exists($uploadfile)) {
		$message = "The file was replaced successfully";
	} else {
		$message = "The file was successfully uploaded";
	}
	if ($_FILES['userfile']['type'] == "text/plain" OR $_FILES['userfile']['type'] == "text/html") {
		if (move_uploaded_file($_FILES['userfile']['tmp_name'],  $uploadfile)) {
		   echo "<p>$message.</p>";
		} else if ($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE) {
			echo "<p>Please choose a file first and then try again...</p>";
		} else if ($_FILES['userfile']['size'] > 1000000) {
			echo "<p>Please choose a file smaller than 1MB and then try again...</p>";
		} else {
			echo "File Upload Error\n Debugging info:";
			print_r($_FILES);
		}
	} else {
		echo "Only HTML and TXT files are supported for file uploads.";
	}
?>

<?php
	require '../view/footerInclude.php';
?>
