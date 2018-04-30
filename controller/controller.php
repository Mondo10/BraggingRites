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
    case 'AddGame':
        addGame();
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
    case 'ProcessAddEdit':
        processAddEdit();
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
    if(isset( $_POST['ListType']))
    {
        $listType = $_GET['ListType'];
        if ($listType == 'ERSB') {
            $results = getMatureRatedgames();
        }else if ($listType == 'ERSB') {
            $results = getMatureRatedgames();
            }
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

function addGame() {
    $mode = "add";
    $name = "";
    $DateRelease = "";
    $MetacriticScore =  0;
    $Price = 0;
    $HavePlayed = "Y";
    $Genre = "";
    $ESRB = "";


    include '../view/editGames.php';
}

function processAddEdit() {
    //print_r($_POST);
    $name = $_POST['Name'];
    $MetacriticScore = $_POST['MetacriticScore'];
    $Genre = $_POST['Genre'];
    $Price = $_POST['Price'];
    $ESRB = $_POST['ESRB'];
    if (isset($_POST['HavePlayed'])) {
        $HavePlayed = 'Y';
    } else {
        $HavePlayed = 'N';
    }
    $DateRelease = $_POST['DateRelease'];

    // Validations
    $errors = "";
    if (empty($name) || strlen($name) > 30) {
        $errors .= "\\n* Name is required and must be no more than 30 characters.";
    }
    if (!empty($DateRelease) && !strtotime($DateRelease)) {
        $errors .= "\\n* Either leave the date blank or provide a valid date.";
    }
    if (empty($MetacriticScore) && !ctype_digit($MetacriticScore)) {
        $errors .= "\\n* mcScore is required and must be no more than 30 characters.";
    } else if (empty ($Price)) {
        $MetacriticScore = 0;
    }

    if (empty($Genre) || strlen($Genre) > 20) {
        $errors .= "\\n* Genre must be no more than 20 characters.";
    }
    if (!empty($Price) && !is_numeric($Price)) {
        $errors .= "\\n* Price level must be numeric.  Enter 0 if unknown.";
    } else if (empty ($Price)) {
        $Price = 0;
    }
    if (empty($ESRB) || strlen($ESRB) > 4) {
        $errors .= "\\something wrong with esrb";

    }

    if ($errors != "") {
        include '../view/editGames.php';
    }
    else {
        $GameID = insertGame($name, $DateRelease, $MetacriticScore, $Price, $HavePlayed, $Genre, $ESRB);
        header("Location:../controller/controller.php?action=DisplayGameDetails&GameID=$GameID");
    }

}

?>