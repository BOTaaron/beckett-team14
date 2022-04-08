<?php

//simple function to connect to the database
function pdo_connect_mysql()
{
    // login variables for the database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'waiter_db';
    try {
        return new PDO('mysql: host = ' . $servername . ';dbname = ' . $database . ';charset=utf8', $username, $password);
    } catch (PDOException $exception) {
        // if there is a problem connecting to the database, this will stop and show an error
        exit('Failed to connect');
    }


}

// template header, currently a placeholder to be updated in the future.
function template_header($title) {
    echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="../basket.css" rel="stylesheet" type="type/css">
    </head>
    <body>
        <header>
            <div class="content-wrapper">
                <h1>Shopping Cart</h1>
                <nav>
                    < href="../index.php">Home<a/>
                </nav>
                <div class="link-icons">
                    <a href="../index.php?page=cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </header>
        <main>
EOT;
}
// Template footer, again a placeholder to be updated
function template_footer() {
    $year = date('Y');
    echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
            <p>&copy; $year, Waiter</p>
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
</html>
EOT;
}
?>
