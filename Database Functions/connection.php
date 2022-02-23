<?php
//Set up the databsse access crednetials
$hostname ='stu-db.aet.leedsbeckett.ac.uk';
$username ='c3570334';
$password ='MyDB92175857';
$databaseName ='c3570334';
$connection =mysqli_connect($hostname, $username, $password, $databaseName) or exit ("Unable to connect to database");
?>