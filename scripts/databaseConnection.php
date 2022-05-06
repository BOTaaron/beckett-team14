<?php
//set up the database access credentials
$hostname = 'stu-db.aet.leedsbeckett.ac.uk';
$username = 'c3575816';
$password = 'MyDB09584239';
$databaseName = 'c3575816-dev';
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit ("Unable to connect to database");
?>