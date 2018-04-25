<?php
	require_once '../model/model.php';

    if (isset($_POST['action'])) {  // check get and post
        $action = $_POST['action'];
    } else if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        include('../view/index.php');  // default action
        exit();
    }

    switch ($action) {
        case 'About':
            include '../view/about.php';
            break;
        case 'EmailSend':
            include '../view/emailSend.php';
            break;
        case 'FileUpload':
            include '../view/fileUpload.php';
            break;
        case 'Home':
            include '../view/index.php';
            break;
        case 'LogoFileUpload':
            include '../view/logoFileUpload.php';
            break;
        case 'Page2':
            include '../view/page2.php';
            break;
        case 'Page3':
            include '../view/page3.php';
            break;
        case 'ProcessRegisterMember': 
            processRegisterMember();
            break;
        case 'RegisterMember':
            include '../view/registerMember.php';
            break;
        default:
            include('../view/index.php');   // default
    }
	
	function processRegisterMember() {
		$firstName = $_POST['FirstName'];
		$lastName = $_POST['LastName'];
		$age = $_POST['Age'];
		$email = $_POST['Email'];

		if (empty($firstName)) {
			$errorMessage = "<h3>You must provide a first name to be registered.</h3>";
			include '../view/errorPage.php';
		} else {
			if (empty($age) || $age < 21) {
				$msg = "You must be at least 21 years old to join.";
			} else if (empty ($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$msg = "You must provide a valid email address to register.";
			} else {
				$msg = "Welcome to the club.";
				saveMemberInfo($firstName, $lastName, $age, $email);
				$memberArray = getMembers();

				include '../view/processRegisterMember.php';		

			}

		}
	}
?>

