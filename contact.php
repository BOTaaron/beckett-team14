<?php
    include __DIR__.'\scripts\contact-scripts.php';
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
    <title>Contact Us</title>
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
                    <li><a class="active" href="#">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="signIn.php">JOIN</a></li>
                    <li><a href="ourLocation.php">FIND US</a></li>
                </ul>
            </nav>
        </div>
        </div>
        <div id="side-menu" class="side-nav">

        <a href="#" class="btn-close" onclick="CSM()"><img src="icons/bak.png" alt="back icon" /></a>
            <!--  Side navigation bar links  -->
            <ul>
                <a href="index.php">HOME</a>
                <a href="order.php">ORDER</a>
                <a class="active" href="#">CONTACT</a>
                <a href="about.php">ABOUT</a>
                <a href="signIn.php">ACCOUNT</a>
                <li><a href="ourLocation.php">LOCATION</a></li>
            </ul>
        </div>

        <!-- form -->

        <form id="contact" action="scripts/contact-scripts.php" method="POST">
            <!--contact us form-->
            <div class="formContainer">

                <h1>Hot food? Cold Beers? Whatever your feedback, we would love to hear it.</h1> <!-- Ashley changed this line lol (suggests our food comes cold)-->
                <hr>

                <div id="fname">
                    <label for="contact"></label>
                    <input type="text" placeholder="Full Name" name="fname" required>
                </div>

                <label for="contact"></label>
                <input type="email"  placeholder="Email" name="email" required>

                <div id="rep">
                    <label for="contact"></label>
                    <input type="email" placeholder="Confirm Email" name="email-confirm" required>
                </div>


                <textarea id="mssg" placeholder="Write your message here" name="comments"></textarea><br />



                <!-- form -->

                <button name = "submit" type="submit" class="registerbtn">Submit</button>
            </div>


        </form>


        <!-- page footer  !-->
        <footer class="footer">
            <!-- javascript link   !-->
        <script src="main.js"></script>
    
        <div class="fcontainer"><!-- the whole footer section  !-->
            <div class="row">
                <div class="footer-col">
                    <ul>             <!--  navbar links in the footer section !-->
                        <li><a href="#">HOME</a></li>
                        <li><a href="order.php">ORDER</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="signIn.php">SIGN UP TODAY</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                                       <!--  other links !-->
                        <li><a href="#">FIND PIXEL</a></li>
                        <li><a href="#">CAREERS</a></li>
                        <li><a href="#">HELP</a></li>
                        <li><a href="#">ADS AND COOKIES</a></li>



                    </ul>
                </div>
                <div class="footer-col">

                    <ul>           <!-- other links  !-->
                        <li><a href="#">PRIVACY</a></li>
                        <li><a href="#">POLICIES</a></li>
                        <li><a href="#">TERMS AND CONDITIONS</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>FOLLOW US</h3>
                    <div class="socialM-links"> <!--  social media links !-->

                        <a href="https://facebook.com"><em class="fab fa-facebook-f"></em></a>
                        <a href="https://twitter.com"><em class="fab fa-twitter"></em></a>
                        <a href="https://whatsapp.com"><em class="fab fa-whatsapp"></em></a>
                        <a href="https://microsoft.com"><em class="fab fa-microsoft"></em></a>


                    </div>

                </div>

            </div>
        </div>
        <hr/>
        <span class="pix"> <!-- name declaration  !-->
           <P>© PIXELCHILLS. All Rights Reserved.</P>
         </span>


    
        </footer>

    </div>
</body>

</html>