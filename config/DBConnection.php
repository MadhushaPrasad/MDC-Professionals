<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'mdc';
$port = '3306';

$connection = new mysqli($host, $user, $password, $database, $port);

if ($connection->connect_error) {
    die("Connection Failed:" . $connection->connect_error);
}
