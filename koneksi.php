<?php

$host = "localhost:3306";
$username = "root";
$password = "";
$database = "db_pemweb";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}