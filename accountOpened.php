<?php


    $userEmail = isset($_POST ['email']) ? $_POST ['email'] : "";
    $messageSubject = 'Reset your Pixelchills password';

    $to = "$userEmail";
    
    $body = 'Please click the attatched link to reset your password, if you did not make this request ignore this email.';
    $resetLink = 'http://localhost/beckett-team14/passwordResetConfirmation.php';

    mail($to,$messageSubject,$resetLink,$body);

    header("Refresh:4;url=index.php");

?>



<!doctype html>
<html lang="en">

<head>
    <!--character width              -->
    <meta charset="utf-8">
    <!--page to fit screen at diff widths    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!--  page title  -->
    <title>Password Reset</title>
    <!-- stylesheet reference   -->
    <link href="main.css" rel="Stylesheet" type="text/css" />
    <!-- icon -->
    <link rel="icon" href="images/Logop2.jpg" type="image/x-icon">
     <!-- social media icons -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>

<body>
    <div class="container">

                    </svg>
                </a>

   
        </div>
            <!--main page content-->
             <body>
                <body style="background-color: #962c3a;text-align:center">
                </body>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>THANK YOU FOR JOINING PIXELCHILLS</h1>
                <p>Please wait while you are redirected</p>
                

            </div>
        </div>
        <span class="pix">
         </span>


    
        </footer>

    </div>
</body>

</html>