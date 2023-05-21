<?php

include ("/Applications/XAMPP/xamppfiles/htdocs/tunnukset.php");

$server = "localhost";
$db = "phlearning";
$user = $db_username_local;
$password = $db_password_local;

function db_connect(){
static $connect;
if (!$connect) {
    $connect= new mysqli(
        $GLOBALS['server'], $GLOBALS['user'], 
        $GLOBALS['password'], $GLOBALS['db']);
}
if ($connect->connect_error) {
   die("<br>Conncection failed: " . $connect->connect_error);
}
return $connect;
}

function mysql_query($query){    
$connect = db_connect();
try {
    $result = $connect->query($query);
    if (!$result) throw new Exception("Query result is false: ".$connect->error);
    else {
        return $result;
        }
    } 
catch (Exception $e) {
    echo 'Error: '. $e->getMessage() . '<br>';
    return false;
    }
}

$connect = db_connect();
?>