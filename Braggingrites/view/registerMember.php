<?php
	$title = "Register Member";
	require '../view/headerInclude.php';
?>
<h1>Register for Beer Of The Month Club</h1>

<form action="../../../../Desktop/Braggingrites/Braggingrites/Controller/controller.php?action=ProcessRegisterMember" method="post">
    <label>First Name: </label>
    <input type="text" name="FirstName" required /><br />
    <label>Last Name: </label>
    <input type="text" name="LastName" /><br />
    <label>Age: </label>
    <input type="number" name="Age" required /><br />
    <label>EMail: </label>
    <input type="email" name="Email" required /><br />
    <input type="submit" value="Sign Up"/>
</form>
<p></p>
<?php
	require '../view/footerInclude.php';
?>