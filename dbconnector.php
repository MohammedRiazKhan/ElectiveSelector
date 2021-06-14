<?php

DEFINE ('DB_USER', 'electiveuser');
DEFINE ('DB_PASSWORD', 'Baboon@1');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'University');

$dbconnect = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$dbconnect){
    die('Could not connect to DB' . mysqli_connect_error());
}

?>
