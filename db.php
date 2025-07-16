<?php
$host = "sql309.infinityfree.com";
$dbname = "if0_38830575_kaka88";
$user = "if0_38830575";
$pass = "Kirebhai121377";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>