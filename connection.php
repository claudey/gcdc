<?php

$connection = mysql_connect(":/cloudsql/jfunudemo:gcdc2013-leaderswatchapp", "root", "");

if($connection){
	$db = mysql_select_db('leaderswatch');
}