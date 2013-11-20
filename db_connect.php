<?php



  $db_host = "localhost";
  $db_username = "root";
  $db_pass = "";
  $db_name = "democratic_dialogue";


  mysql_connect("$db_host","$db_username","$db_pass") or die(mysql_error());
  mysql_select_db("$db_name") or die("No database by that name"); 

/*** mysql hostname ***/
// $hostname = 'localhost';

// /*** mysql username ***/
// $username = 'root';

// /*** mysql password ***/
// $password = '';

// try {

//     $dbh = new PDO("mysql:host=$hostname;dbname=democratic_dialogue", $username, $password);
//     /*** echo a message saying we have connected ***/
//     /*** close the database connection ***/
//     ///$dbh = null;
//     }
// catch(PDOException $e)
//     {
//     echo $e->getMessage();
//     }

?>