<?php
$host="localhost";
$db_user="root";
$pass=null;
$db_name="register_db";

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
if (!$mysqli) {
    die('a connection was unsuccesful');
}


?>