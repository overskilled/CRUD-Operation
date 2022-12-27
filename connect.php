<?php
 
$host = "localhost";
$servername = "root";
$serverpwd = "";
$dbname = "crudoperation";

$connect = new mysqli($host, $servername, $serverpwd, $dbname);

if (!$connect){
    die("Connection Failed: ". mysqli_connect_error());
}


