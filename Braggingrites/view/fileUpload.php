<?php
	$title = "File Upload";
	require '../view/headerInclude.php';
?>
<h1>Upload File to the Server</h1>

<form enctype="multipart/form-data" 
          action="processFileUpload.php" method="post">
    Send this file: 
    <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
<p> </p>
<?php
	require '../view/footerInclude.php';
?>
