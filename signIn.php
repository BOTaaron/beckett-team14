<!doctype html>
<html lang="en">

<head>
    <!--character width              -->
    <meta charset="utf-8">
    <!--page to fit screen at diff widths    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!--  page title  -->
    <title>Sign In</title>
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

        <div class="main">
            <!--This code is poorly written and confusing to read but it works + all the functions work so maybe leave it for now-->
                   
                <div class="container">
                </div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <h4> SIGN IN </h4>
                <br />
                <br />
                <p>Dont forget to log in to see our latest events and offers</p>

                <div class="container">

                    <form method="post" action="insertRecord.php">

                        <input type="text" placeholder="Email*" name="txtEmail" />
                        <br />
                        <input type="password" placeholder="Password*" name="txtPass">
                        <a href="passwordReset.php"><p><u> Forgotten your password?</u></p></a>
                        <br />
                        <button name = "subUser" type="submit" class="registerbtn">SIGN UP</button>
                        <br />
                        <br />
                        <h2> Not a member? <a href="createAccount.php">Register here</a></h2>
                        <br />    
                    </form>
                    
            <!-- page footer  !-->
        <footer class="footer">
            <!-- javascript link   !-->
        <script src="main.js"></script>
        <hr size="1" width="100%" color="white">
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