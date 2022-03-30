<!doctype html>
<html lang="en">

<head>
    <!--character width              -->
    <meta charset="utf-8">
    <!--page to fit screen at diff widths    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!--  page title  -->
    <title>about</title>
    <!-- stylesheet reference   -->
    <link href="main.css" rel="Stylesheet" type="text/css" />
    <!-- icon -->
    <link rel="icon" href="images/Logop.jpg" type="image/x-icon">
     <!-- social media icons -->
     <link rel="icon" href="images/Logop.jpg" type="image/x-icon">
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
                    <li><a href="signIn.php">SIGN IN</a></li>
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
                <a href="signIn.php">ACCOUNT</a>
            </ul>
        </div>

        <div class="main">
            <!--main page content-->
            
                <br />
                <br />
                <h1> - SIGN IN - </h1>
                <p>Dont forget to log in to see our latest events and offers.</p>

                    <form method="post" action="insertRecord.php">

                        <input type="text" placeholder="Email*" name="txtEmail" />
                        <br />
                        <input type="text" placeholder="Password*" name="txtPass" />
                        <br />
                        <a href="passwordReset.php"><p><u> Forgotten your password?</u></p></a>
                        <br />
                        <button name = "subUser" type="submit" class="registerbtn">SIGN UP</button>
                        <br />
                        <br />
                        <h2> Not a member? <a href="createAccount.html"><u>Register here</u></a></small></h2>
                        <br />    

                    </form>

        </div>
        <hr/>

        <footer class="footer">
        <script src="main.js"></script>
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
           <P>PixelChills &#64;2022</P>
         </span>


    
        </footer>

    </div>
</body>

</html>