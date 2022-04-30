<?php

    //include connection
    include __DIR__.'\scripts\databaseConnection.php';
    //has the form been submitted?
    if(isset($_POST['subUser'])){
        //collect data from
        $id=$_POST['txtID'];
        $name=$_POST['txtName'];
        $email=$_POST['txtEmail'];
        $feedback=$_POST['txtFeedback'];

        //produce a query to INSERT INTO table
        $query = "INSERT INTO users_feedback
                (userID, userName, userEmail, userFeedback)
            VALUES
                ('$id', '$name', '$email', '$feedback')";

                //echo $query;
               // exit();



            mysqli_query($connection, $query);

            header('location:contact.php');

    }
    ?>