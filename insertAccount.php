<?php

    //include connection
    include __DIR__.'\scripts\databaseConnection.php';
    //has the form been submitted?
    if(isset($_POST['subUser'])){
        //collect data from
        $id=$_POST['txtID'];
        $name=$_POST['txtName'];
        $email=$_POST['txtEmail'];
        $pass=$_POST['txtPass'];

        //produce a query to INSERT INTO table
        $query = "INSERT INTO users_new_accounts
                (userID, userName, userEmail, userPass)
            VALUES
                ('$id', '$name', '$email', '$pass')";

                //echo $query;
               // exit();



            mysqli_query($connection, $query);

            header('location:accountOpened.php');

    }
    ?>