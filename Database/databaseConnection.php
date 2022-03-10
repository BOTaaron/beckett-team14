<?php
//set up the database access crednetials
$hostname = 'localhost';
$username = 'root';
$password = 'Chickenman20';
$databaseName = 'hugheseliteoffline';
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit ("Unable to connect to database");
?>