<?php

//start the database. Hostname of localhost, username of pixelchills, no password, and use a database named 'contact-us'
$con = mysqli_connect("localhost", "root", "", "contact_us");

    //checks for errors when starting the database, otherwise will continue with the code
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " .mysqli_connect_error();
        exit();

    } elseif ((isset($_POST['submit']))) {
        //isset method to check whether submit button is clicked, if so code runs (above)
        //takes data submitted into the 'contact us' form and saves it into constants (below)
        $Fname = $con->real_escape_string($_POST['fname']);
        $Email = $con->real_escape_string($_POST['email']);
        $ConfirmEmail = $con->real_escape_string($_POST['email-confirm']);
        $Comments = $con->real_escape_string($_POST['comments']);

        //inserts data from the constants above into a table called contact

        $sql = "INSERT INTO contact (name, email, confirmation, comments) VALUES ('".$Fname."', ' ".$Email."', '".$ConfirmEmail."', '".$Comments."')";

    }
?>


