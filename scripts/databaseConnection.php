<?php
//set up the database access crednetials
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'customerdatabase';
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit ("Unable to connect to database");
?>