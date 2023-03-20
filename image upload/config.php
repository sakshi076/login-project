<?php

//declare variables
$dbhost = 'localhost';  //Default hostname
$dbuser = 'root'; //Default username
$dbpass = ''; //Default password
$dbname = 'radio'; //your database name

//Create connection using object oriented way
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

//Check Connection
if ($db->connect_errno) {
    echo "Connect failed: <br />" . $db->connect_error;
    exit();
}
?>