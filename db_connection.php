<?php
$db_host = "localhost";
$db_user = 'albanians_php_sxt';
$db_pass = 'cerrik_elbasan_tirane_kine';
$db_name = 'live_tv_apis';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected Successfully";
?>