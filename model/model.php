<?php


function getDBConnection()
{
    //contains where you wanna run and the db name
    //$dsn = 'mysql:host=localhost;dbname=s_ascoleman_Braggingrites;

    $dsn = 'mysql:host=localhost;dbname=s_aanderson3_BraggingRites';
    //$username = 's_aanderson3';
    //$password = 's_aanderson3';
    $username = 'root';
    $password = '';


    try
    {
        $db = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e)
    {
        //include '../view/error.php';
        die;
    }
    return $db;
}

function getallgames()
{
    try {
        $db = getDBConnection();
        $query = "select * from games order by Name";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement-> fetchAll();
        $statement->closeCursor();
        return $results;
    }
    catch (PDOException $e)
    {
        die;



    }
}

function getMatureRatedgames()
{
    try {
        $db = getDBConnection();
        $query = "select * from games WHERE ESRB = 'M'  order by Name";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement-> fetchAll();
        $statement->closeCursor();
        return $results;
    }
    catch (PDOException $e)
    {
        die;



    }
}

function getHavePlayedgames()
{
    try {
        $db = getDBConnection();
        $query = "select * from games WHERE HavePlayed = 'Y' order by Name";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement-> fetchAll();
        $statement->closeCursor();
        return $results;
    }
    catch (PDOException $e)
    {
        die;



    }
}
function GetGameDetails($gameid)
{
    try {
        $db = getDBConnection();
        $query = "select * from games WHERE GameID = :gameid";

        $statement = $db->prepare($query);
        $statement->bindValue(':gameid',$gameid);
        $statement->execute();
        $row = $statement-> fetch();
        $row['GameImagePath'] = getGameImagePath($gameid);
        $statement->closeCursor();
        return $row;
    }
    catch (PDOException $e)
    {
        die;



    }
}
function getGameImagePath($gameID)
{
    $gameImageDirectory = "../DataFiles/Images";
    $gameFilePath = "$gameImageDirectory/$gameID.jpg";
    if (is_file($gameFilePath)) {
        return $gameFilePath;
    } else {
        return "";
    }
}


function saveMemberInfo($firstName, $lastName, $age, $email) {
    $file = fopen('../DataFiles/members.csv', 'ab');
    fputcsv($file,
        array($firstName, $lastName, $age, $email));
    fclose($file);
}

function getMembers() {
    $file = fopen('../DataFiles/members.csv', 'rb');
    while (($data = fgetcsv($file)) !== FALSE) {
        $memberArray[] = array($data[0], $data[1], $data[2], $data[3]);
    }
    fclose($file);
    return $memberArray;
}

?>

