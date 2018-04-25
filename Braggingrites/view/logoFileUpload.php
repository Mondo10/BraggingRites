<?php
	$title = "Log File Upload";
	require '../view/headerInclude.php';
?>
<h1>Upload Logo File to the Server</h1>

<form enctype="multipart/form-data" 
          action="processLogoFileUpload.php" method="post">
    Select a Logo File: 
    <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
<p> </p>
<?php
	require '../view/footerInclude.php';
?>
