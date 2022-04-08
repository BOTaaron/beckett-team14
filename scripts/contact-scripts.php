<?php

// database credentials. Set up to use phpMyAdmin and must be adjusted depending on the DB

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'waiter_db';

//start the database. Hostname of localhost, username of pixelchills, no password, and use a database named 'contact-us'
$conn = mysqli_connect($servername, $username, $password, $database);


//checks for errors when starting the database, otherwise will continue with the code
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " .mysqli_connect_error();
    exit();

} elseif (isset($_POST['submit'])) {
    //isset method to check whether submit button is clicked, if so code runs (above)
    //takes data submitted into the 'contact us' form and saves it into variables (below)
    $fname = $conn->real_escape_string($_POST['fname']);
    $email = $conn->real_escape_string($_POST['email']);
    $confirmEmail = $conn->real_escape_string($_POST['email-confirm']);
    $comments = $conn->real_escape_string($_POST['comments']);


    // inserts data from the variables above into a table called contact
    // variables are saved into placeholders represented by the question marks

    $sql = "INSERT INTO contact (name, email, confirmation, comments)
                VALUES (?, ?, ?, ?)";
    // below, the query is prepared to be sent separately from the data.
    //this will help prevent SQL injections or syntax errors from the data input in the forms.
    $stmt = $conn->prepare($sql);
    // below we bind the variables to a statement.
    // the first parameter, "ssss" declares the four variables as string values.
    $stmt->bind_param("ssss", $fname, $email, $confirmEmail, $comments);
    // simply executes the query. Data is sent to the database and the page will soon redirect the user.
    $stmt->execute();

    // gives a message before redirecting the user back to the contact page.
    echo "Thank you for your feedback. You should hear back from us within 24 hours. You will now be redirected...";
    // simply refreshes the page once the form is submitted
    header('Location: ../contact.php');
}

// closes the database connection. Optional, but good practice.
mysqli_close($conn);

?>


