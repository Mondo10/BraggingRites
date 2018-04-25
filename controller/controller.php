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
        include '../view/About.php';
        break;
    case 'EmailSend':
        include '../view/EmailSend.php';
        break;
    case 'FileUpload':
        include '../view/fileUpload.php';
        break;
    case 'quoteUpload':
        include '../view/quoteUpload.php';
        break;
    case 'Home':
        include '../view/index.php';
        break;
    case 'imageUpload':
        include '../view/imageUpload.php';
        break;
    case 'Register':
        include '../view/Register.php';
        break;
    case 'TopGames':
        listGames();
        break;
    case 'Brackets':
    include '../view/Brackets.php';
    break;
    case 'calendar':
        include '../view/calendar.php';
        break;
    case 'GameDetails':
        DisplayGame();
        break;

    case 'SearchGames':
        searchGames();
        break;

    case 'FAQ':
        include '../view/FAQ.php';
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


function DisplayGame()
{
    $gameid = $_GET['GameID'];
    $row = GetGameDetails($gameid);
    include '../view/DisplayGameDetails.php';

}

function listGames() {
    $listType = $_GET['ListType'];
    if ($listType == 'ERSB') {
        $results = getMatureRatedgames();
    }else if ($listType == 'ERSB') {
        $results = getMatureRatedgames();
    }else {
        $results = getallgames();
    }
    $results = getallgames();
        include '../view/listForm.php';

}

function searchGames(){

    $results = getallgames();
    if(count($results)==0){
        $php_errormsg = "No Games found.";

    } else {
        include '../view/SearchGames.php';
    }
}

?>

