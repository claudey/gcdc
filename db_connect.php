<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

try {

    $dbh = new PDO("mysql:host=$hostname;dbname=democratic_dialogue", $username, $password);
    /*** echo a message saying we have connected ***/
    /*** close the database connection ***/
    ///$dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

?>