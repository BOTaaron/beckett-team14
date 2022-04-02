<?php


    $userEmail = isset($_POST ['email']) ? $_POST ['email'] : "";
    $messageSubject = 'Reset your Pixelchills password';

    $to = "$userEmail";
    
    $body = 'Please click the attatched link to reset your password, if you did not make this request ignore this email.';
    $resetLink = 'http://localhost/beckett-team14/passwordResetConfirmation.php';

    mail($to,$messageSubject,$resetLink,$body);



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

    <div class="all_nav">
        <div class="bg-img">
            <nav class="navbar">
                <!-- side navigation bar   -->
                <a href="#" onclick="OSM()">
                    <svg class="svg" width="30" height="30">
                        <path id="sgv1" d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                        <path id="sgv2" d= "M0,14 30,14" stroke="#fff" stroke-width="5"/>
                        <path id="sgv3" d= "M0,23 30,23" stroke="#fff" stroke-width="5"/>
                        
                    
                    </svg>
                </a>

                <ul class="navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="order.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a class="active" href="#">SIGN IN</a></li>
                </ul>
            </nav>
        </div>
        </div>
        <div id="side-menu" class="side-nav">

            <a href="#" class="btn-close" onclick="CSM()">&times;</a>
            <!--  Side navigation bar links  -->
            <ul>
                <a href="index.php">HOME</a>
                <a href="order.php">ORDER</a>
                <a href="contact.php">CONTACT</a>
                <a href="about.php">ABOUT</a>
                <a class="active" href="#">ACCOUNT</a>
            </ul>
        </div>
            <!--main page content-->
             <body>
                <body style="background-color: #962c3a;text-align:center">
                </body>
                <div class="container">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>RESET YOUR PASSWORD</h1>
                <p>Enter the email address used to register your account with us.</p>
             
                </div>
                
                
    <div class="container">
        <form action="passwordReset.php" method="POST" class="form">
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email*" tabindex="1" required>
                <div>
                    <br>
                <button type="submit" class="btn">SUBMIT</button>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            
      
        <footer class="footer">
        <script src="main.js"></script>
        <hr size="1" width="100%" color="white">
        <div class="fcontainer">
            <div class="row">
                <div class="footer-col">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="order.php">ORDER</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="signIn.php">SIGN UP TODAY</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>

                        <li><a href="#">FIND PIXEL</a></li>
                        <li><a href="#">CAREERS</a></li>
                        <li><a href="#">HELP</a></li>
                        <li><a href="#">ADS AND COOKIES</a></li>



                    </ul>
                </div>
                <div class="footer-col">

                    <ul>
                        <li><a href="#">PRIVACY</a></li>
                        <li><a href="#">POLICIES</a></li>
                        <li><a href="#">TERMS AND CONDITIONS</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>FOLLOW US</h3>
                    <div class="socialM-links">

                        <a href="https://facebook.com"><em class="fab fa-facebook-f"></em></a>
                        <a href="https://twitter.com"><em class="fab fa-twitter"></em></a>
                        <a href="https://whatsapp.com"><em class="fab fa-whatsapp"></em></a>
                        <a href="https://microsoft.com"><em class="fab fa-microsoft"></em></a>


                    </div>

                </div>

            </div>
        </div>
        <hr/>
        <span class="pix">
           <P>© PIXELCHILLS. ALL RIGHTS RESERVED</P>
         </span>


    
        </footer>

    </div>
</body>

</html>