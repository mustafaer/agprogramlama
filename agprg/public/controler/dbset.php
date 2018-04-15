<?php
@session_start();

$host = "127.0.0.1";

$dbname = "agprg";
$user = "db_username";
$pass = "db_password";

try {
     $db = new PDO("mysql:host=$host;dbname=$dbname", $user,$pass);
} catch ( PDOException $e ){
     print $e->getMessage();
}
$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
?>
