<?php

    //include connection
    include 'databaseConnection.php';
    //has the form been submitted?
    if(isset($_POST['subUser'])){
        //collect data from
        $id=$_POST['txtID'];
        $email=$_POST['txtEmail'];
        $pass=$_POST['txtPass'];

        //produce a query to INSERT INTO table
        $query = "INSERT INTO users
                (userID, userEmail, userPass)
            VALUES
                ('$id', '$email', '$pass')";

                //echo $query;
               // exit();



            mysqli_query($connection, $query);

            header('location:accountCreated.html');

    }



        





