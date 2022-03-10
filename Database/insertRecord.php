<?php

    //include connection
    include 'databaseConnection.php';
    //has the form been submitted?
    if(isset($_POST['subUser'])){
        //collect data from
        $id=$_POST['txtID'];
        $name=$_POST['txtName'];
        $pass=$_POST['txtPass'];

        //produce a query to INSERT INTO table
        $query = "INSERT INTO users
                (userID, userName, userPass)
            VALUES
                ('$id', '$name', '$pass')";

                //echo $query;
               // exit();



            mysqli_query($connection, $query);

            header('location:accountCreated.php');

    }



        





