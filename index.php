
<!doctype html>
<html lang="en">
    

<head>
    <!--character width              -->
    <meta charset="utf-8">
    <!--page to fit screen at diff widths    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!--  page title  -->
    <title>About</title>
    <!-- stylesheet reference   -->
    <link href="main.css" rel="Stylesheet" type="text/css" />
    <!-- icon -->
    <link rel="icon" href="images/Logop.jpg" type="image/x-icon">
</head>

<body>
    <div class="container">

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
                    <li><a class="active" href="#">HOME</a></li>
                    <li><a href="order.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="signIn.php">SIGN IN</a></li>
                </ul>
            </nav>
        </div>
        <div id="side-menu" class="side-nav">

            <a href="#" class="btn-close" onclick="CSM()">&times;</a>
            <!--  Side navigation bar links  -->
            <ul>
                <a class="active" href="#">HOME</a>
                <a href="order.php">ORDER</a>
                <a href="contact.php">CONTACT</a>
                <a href="about.php">ABOUT</a>
                <a href="signIn.php">SIGN IN</a>
            </ul>
        </div>
        <div class="main">
            <!--main page content-->
            <span>
            <img src="images/coffee-shop.jpg" alt="coffee bar" />
           
                <div id="floatImg"><img src="images/citycentre.jpg" alt="location" /></div>
            </span>

        </div>

        <script src="main.js"></script>
        <footer>
            <div class="foot">

                <P> - Stay in touch and follow us - </P>
                <nav class="nav1">
                    <ul class="nav_links">
                        <li>
                            <a href="https://www.facebook.com"><img src="images/facebook.jpg" alt="facebook icon"></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com"><img src="images/twitter.jpg" alt="twitter icon"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com"><img src="images/instagram.png" alt="instagram icon"></a>
                        </li>
                    </ul>
                    <P>PixelChills &#64;2022</P>
                </nav>
            </div>

        </footer>

    </div>
</body>

</html>