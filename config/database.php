<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'amber');
define('DB_PASS', 'Violet@69');
define('DB_NAME', 'sparks');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}
