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
        echo $e->getMessage();
        die;



    }
}

function getByGeneralSearch($criteria){
    try {
        $db = getDBConnection();
        $query = "SELECT * FROM games 
                  WHERE Name LIKE :criteria OR Genre LIKE :criteria OR ERSB LIKE :criteria";
        $statement = $db->prepare($query);
        $statement->bindValue(':criteria',"%$criteria%");
        $statement->execute();
        $results = $statement-> fetchAll();
        $statement->closeCursor();
        return $results;
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        die;



    }



}

function getMatureRatedgames()
{
    try {
        $db = getDBConnection();
        $query = "select * from games WHERE ERSB = 'M'  order by Name";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement-> fetchAll();
        $statement->closeCursor();
        return $results;
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        die;



    }
}

function getHavePlayedgames()
{
    try {
        $db = getDBConnection();
        $query = "select * from games WHERE HavePlayed = 'y' order by Name";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement-> fetchAll();
        $statement->closeCursor();
        return $results;
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
        die;



    }
}

    function insertGame($name, $DateRelease, $MetacriticScore, $Price, $HavePlayed, $Genre, $ESRB) {
        $db = getDBConnection();
        $query = 'INSERT INTO games (Name, DateRelease, MetacriticScore, Price, HavePlayed, Genre, ESRB)
                VALUES (:Name, :DateRelease, :MetacriticScore, :Price, :HavePlayed, :Genre, :ESRB)';
        $statement = $db->prepare($query);

        $statement->bindValue(':Name', $name);
        if (empty($DateRelease)){		// Date may be blank so store a Null
            $statement->bindValue(':DateRelease', null, PDO::PARAM_NULL);
        } else {
            $statement->bindValue(':DateRelease', toMySQLDate($DateRelease));
        }
        $statement->bindValue(':MetacriticScore', $MetacriticScore);
        $statement->bindValue(':Price', $Price);
        $statement->bindValue(':HavePlayed', $HavePlayed);
        $statement->bindValue(':Genre', $Genre);
        $statement->bindValue(':ESRB', $ESRB);



        $success = $statement->execute();
        $statement->closeCursor();

        if ($success) {
            return $db->lastInsertId(); // Get generated BeerID
        } else {
            logSQLError($statement->errorInfo());  // Log error to debug
        }
    }

    function updateGame($GameID, $name, $DateRelease, $MetacriticScore, $Price, $HavePlayed, $Genre, $ESRB) {
        $db = getDBConnection();
        $query = 'UPDATE games  SET Name = :Name, DateRelease = :DateRelease, 
                        MetacriticScore = :MetacriticScore, Price = :Price, HavePlayed = :HavePlayed,
                        Genre = :Genre, ESRB = :ESRB
                      WHERE GameID =  :GameID';
        $statement = $db->prepare($query);
        $statement->bindValue(':GameID', $GameID);
        $statement->bindValue(':Name', $name);
        if (empty($DateRelease)){		// Date may be blank so store a Null
            $statement->bindValue(':DateRelease', null, PDO::PARAM_NULL);
        } else {
            $statement->bindValue(':DateRelease', toMySQLDate($DateRelease));
        }
        $statement->bindValue(':MetacriticScore', $MetacriticScore);
        $statement->bindValue(':Price', $Price);
        $statement->bindValue(':HavePlayed', $HavePlayed);
        $statement->bindValue(':Genre', $Genre);
        $statement->bindValue(':ESRB', $ESRB);



        $success = $statement->execute();
        $statement->closeCursor();

        if ($success) {
            return $statement->rowCount();         // Number of rows affected
        } else {
            logSQLError($statement->errorInfo());  // Log error to debug
        }
    }

    function deleteOneGame($GameID){
        $db = getDBConnection();

        $query = 'DELETE FROM games
                         WHERE GameID =  :GameID';

        $statement = $db->prepare($query);
        $statement->bindValue(':GameID', $GameID);

        $success = $statement->execute();
        $statement->closeCursor();

        if ($success) {
            return $statement->rowCount(); // Number of rows affected
        } else {
            logSQLError($statement->errorInfo());  // Log error
        }
    }

    function logSQLError($errorInfo) {
        $errorMessage = $errorInfo[2];
        include '../view/errorPage.php';
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
            $statement->closeCursor();
            return $row;
        }
        catch (PDOException $e)
        {
            die;



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

    function toMySQLDate($date) {
        if ($phpDate = strtotime($date)) {
            return date('Y-m-d', $phpDate);
        } else {
            return "";
        }
    }



?>