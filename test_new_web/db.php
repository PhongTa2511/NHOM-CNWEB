<?php
$host = 'localhost:3306';
$username = 'root';
$password = '';
$dbname = 'news_website';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
