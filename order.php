<!doctype html>
<html lang="en">

<head>
    <!--character width              -->
    <meta charset="utf-8">
    <!--page to fit screen at diff widths    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <!--  page title  -->
    <title>Order Online</title>
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
                        <path id="sgv3" d= "M0,23 30,23" stroke="#fff" stroke-width="5">
                        
                    
                    </svg>
                    </a>

                    <ul class="navbar-nav">

                        <li><a href="index.php">HOME</a></li>
                        <li><a class="active" href="#">ORDER</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="signIn.php">SIGN IN</a></li>
                        <li><a href="ourLocation.php">FIND US</a></li>
                    </ul>
                </nav>
                <div class="search-bar">
                    <input class="search-txt" type="txt" name="" placeholder="Search our menu">
                    <a class="search-btn" href="#"><img src="icons/search.png" alt="search icon" /></a>

                </div>


            </div>
        </div>
        <div id="side-menu" class="side-nav">

            <a href="#" class="btn-close" onclick="CSM()"><img src="icons/bak.png" alt="back icon" /></a>
            <!--  Side navigation bar links  -->
            <ul>
                <a href="index.php">HOME</a>
                <a class="active" href="#">ORDER</a>
                <a href="contact.php">CONTACT</a>
                <a href="about.php">ABOUT</a>
                <a href="signIn.php">ACCOUNT</a>
                <li><a href="ourLocation.php">LOCATION</a></li>

            </ul>
        </div>

        <div class="products">
            <!--main page content will come here-->

            <!-- Hot drinks banner for order page -->
            <img class="banner" src="images/hot-drink-banner.png" style="margin-bottom: 25px; margin-top: 25px"  >
            <br>


            <!-- Product cards begin here. For demo, 4 will be used for each category. -->
            <div class="card">
                <img class="card-image" src="images/americano.jpg" alt="Americano">
                <h1>Americano</h1>
                <p class="price">£1.99</p>
                <p>A hot, black coffee</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/cappuccino.jpg" alt="Cappuccino">
                <h1>Cappuccino</h1>
                <p class="price">£2.49</p>
                <p>A hot, frothy, milky coffee</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/latte.jpg" alt="latte">
                <h1>Latte</h1>
                <p class="price">£2.49</p>
                <p>A hot, frothy, milky coffee</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/tea.jpg" alt="tea"">
                <h1>Tea</h1>
                <p class="price">£2.49</p>
                <p>A hot cup of tea, served with biscuits</p>
                <p><button>Add to Cart</button></p>
            </div>


            <!-- SECOND ROW OF PRODUCTS STARTS HERE -->
            <img class="banner" src="images/cold-drink-banner.png" style="margin-top: 25px; margin-bottom: 25px">
            <br>


            <div class="card">
                <img class="card-image" src="images/water.jpg" alt="bottled water">
                <h1>Bottled Water</h1>
                <p class="price">£1.69</p>
                <p>Bottled water with a glass of ice</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/orange.jpg" alt="orange juice">
                <h1>Orange Juice</h1>
                <p class="price">£1.99</p>
                <p>Fresh orange juice</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/coke.jpg" alt="coca cola">
                <h1>Coca Cola</h1>
                <p class="price">£1.99</p>
                <p>A cold can of Coca Cola, served with ice</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/fanta.jpg" alt="fanta">
                <h1>Fanta</h1>
                <p class="price">£1.99</p>
                <p>A cold can of Fanta, served with ice</p>
                <p><button>Add to Cart</button></p>
            </div>


            <!-- THIRD ROW OF PRODUCTS HERE -->
            <img class="banner" src="images/hot-food-banner.png" style="margin-top: 25px; margin-bottom: 25px">
            <br>

            <div class="card">
                <img class="card-image" src="images/tuna-panini.jpg" alt="tuna panini">
                <h1>Tuna Panini</h1>
                <p class="price">£4.99</p>
                <p>A hot tuna panini in fresh bread with cheese</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/soup.jpg" alt="soup">
                <h1>Soup of the Day</h1>
                <p class="price">£4.50</p>
                <p>Tomato soup, freshly made in our kitchen. </p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/cheese-tomato-panini.jpg" alt="cheese and tomato panini">
                <h1>Cheese and Tomato Panini</h1>
                <p class="price">£4.99</p>
                <p>A hot cheese and tomato panini</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/avocado-toast.jpeg" alt="avocado toast">
                <h1>Avocado Toast</h1>
                <p class="price">£4.99</p>
                <p>Avocado toast, served on sourdough</p>
                <p><button>Add to Cart</button></p>
            </div>

            <!-- FOURTH ROW OF PRODUCTS HERE -->
            <img class="banner" src="images/cold-food-banner.png" style="margin-top: 25px; margin-bottom: 25px">
            <br>

            <div class="card">
                <img class="card-image" src="images/ham-cheese-baguette.jpg" alt="ham and cheese baguette">
                <h1>Ham and Cheese Baguette</h1>
                <p class="price">£4.49</p>
                <p>Ham and cheese, served in a fresh baguette</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/prawn-baguette.jpg" alt="prawn baguette">
                <h1>Prawn Cocktail Baguette</h1>
                <p class="price">£4.49</p>
                <p>Baguette with prawns and Marie Rose sauce</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/caesar.jpg" alt="caesar salad">
                <h1>Chicken Caesar Salad</h1>
                <p class="price">£4.99</p>
                <p>Salad with chicken, bacon, and a homemade dressing</p>
                <p><button>Add to Cart</button></p>
            </div>

            <div class="card">
                <img class="card-image" src="images/turkey-sandwich.jpg" alt="turkey sandwich">
                <h1>Turkey Sandwich Stack</h1>
                <p class="price">£5.99</p>
                <p>A sandwich with turkey, bacon, and a variety of salad.</p>
                <p><button>Add to Cart</button></p>
            </div>










        <!-- main page content end here !-->
        <br>
        <br>
        
        <hr size="1" width="97%" color="white">
        <!-- page footer  !-->
        <footer class="footer">
            <!-- javascript link   !-->
            <script src="main.js"></script>

            <div class="fcontainer">
                <!-- the whole footer section  !-->
                <div class="row">
                    <div class="footer-col">
                        <ul>
                            <!--  navbar links in the footer section !-->
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

                        <ul>
                            <!-- other links  !-->
                            <li><a href="#">PRIVACY</a></li>
                            <li><a href="#">POLICIES</a></li>
                            <li><a href="#">TERMS AND CONDITIONS</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h3>FOLLOW US</h3>
                        <div class="socialM-links">
                            <!--  social media links !-->

                            <a href="https://facebook.com"><em class="fab fa-facebook-f"></em></a>
                            <a href="https://twitter.com"><em class="fab fa-twitter"></em></a>
                            <a href="https://whatsapp.com"><em class="fab fa-whatsapp"></em></a>
                            <a href="https://microsoft.com"><em class="fab fa-microsoft"></em></a>


                        </div>


                    </div>

                </div>
            </div>

         </span>



        </footer>

    </div>
</body>

</html>