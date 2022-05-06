<?php

    //include connection
    include 'scripts/databaseConnection.php';
    //has the form been submitted?
    if(isset($_POST['subUser'])){
        //collect data from
        $name=$_POST['txtName'];
        $email=$_POST['txtEmail'];
        $feedback=$_POST['txtFeedback'];

        //produce a query to INSERT INTO table
        $query = "INSERT INTO users_feedback
                (userName, userEmail, userFeedback)
            VALUES
                ('$name', '$email', '$feedback')";

                //echo $query;
               // exit();



            mysqli_query($connection, $query);

            header('location:contact.php');

    }
    ?>