<?php
//MySQL server with defaul setting
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', '');
define('DB_NAME', 'login-system');

//Conenect to MySQL database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check Connection
if($link === false) {
    die("ERROR: Could not connect" .
mysqli_connect_error());
}
?>