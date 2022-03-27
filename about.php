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
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="order.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a class="active" href="#">ABOUT</a></li>
                    <li><a href="signIn.php">SIGN IN</a></li>
                </ul>
            </nav>
        </div>
        <div id="side-menu" class="side-nav">

            <a href="#" class="btn-close" onclick="CSM()">&times;</a>
            <!--  Side navigation bar links  -->
            <ul>
                <a href="index.php">HOME</a>
                <a href="order.php">ORDER</a>
                <a href="contact.php">CONTACT</a>
                <a class="active" href="#">ABOUT</a>
                <a href="signIn.php">SIGN IN</a>
            </ul>
        </div>

        <div class="main">
            <!--main page content-->


            <span id="abtI">
                <img src="images/chambo.jpg" alt="Chambo">
                <div id="abtT">How We Began</div>
            </span>

            <p>Our business started in 1992 by our founders who rose from regular chefs to Certified Master Chefs. Working at Great Foods their entire life, they decided it was time to own own a business. After obtaining the title Master Chef, they wanted
                to make a huge impact in the food industry independently. Through dedication and experimentation, they came up with multiple great tasty menus and eventually the business sprang up.
            </p>
            <p>Today, our primary goal is to thrive as an excellent restaurant with delicious menus and unparalled customer servicing. We have worked hard to become the number one food supplier ever since. For 5 years we have held this position and we aim
                to keep it that way. We have become every celebrityu's favourite food spot across the country with other visits from international ones.
            </p>

            <p>
                Spanning across the UK, our number of brunches continues to grow due to high demand for our quality food and service. We do not take our customers for granted therefore our primary objectives have always been to provide great tasty menus to our valued
                consumers with unparalled professional service.
            </p>


        </div>

        <script src="main.js"></script>
        <hr>
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