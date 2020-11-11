<?php

$username = 'ks835';
$password = 'Kerminator23!';
$hostname = 'ks835@njit.edu';

$dsn = "mysql:host=$hostname;dbname=$username";

try {
    $db = new PDO($dsn, $username, $password);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>