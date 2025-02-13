<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Delivery Website</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
    <!-- Hover CSS -->
    <link rel="stylesheet" href="css/hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation Section Start -->
    <header class="navbar">
        <nav id="site-top-nav" class="navbar-menu navbar-fixed-top">
            <div class="container">
                <!-- logo -->
                <div class="logo">
                    <a href="index.php" title="Logo">
                        <img id="mylogo" src="img/logo.png" alt="Logo" class="img-responsive">
                    </a>
                </div>
                <!-- Main Menu -->
                <div class="menu text-right">
                    <ul>
                        <li><a class="hvr-underline-from-center" href="index.php">Home</a></li>
                        <li><a class="hvr-underline-from-center" href="categories.php">Categories</a></li>
                        <li><a class="hvr-underline-from-center" href="foods.php">Foods</a></li>
                        <li><a class="hvr-underline-from-center" href="order.php">Order</a></li>
                        <li><a class="hvr-underline-from-center" href="contact.php">Contact</a></li>
                        <li><a class="hvr-underline-from-center" href="login.php">Login</a></li>
                        <li>
                            <a id="shopping-cart" class="shopping-cart">
                                
                                <i><img class="cart-svg" src="svg-file/SHOPPING-CART.svg" alt=""></i>
                                <span class="badge">4</span>
                            </a>
                            <div id="cart-content" class="cart-content">
                                <h3 class="text-center">Shopping Cart</h3>
                                <table class="cart-table" border="0">
                                    <tr>
                                        <th>Food</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td><img src="img/food/p1.jpg" alt="Food"></td>
                                        <td>Pizza</td>
                                        <td>$ 8.00</td>
                                        <td>1</td>
                                        <td>$ 8.00</td>
                                        <td><a href="#" class="btn-delete">&times;</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/food/s1.jpg" alt="Food"></td>
                                        <td>Sandwich</td>
                                        <td>$ 8.00</td>
                                        <td>1</td>
                                        <td>$ 8.00</td>
                                        <td><a href="#" class="btn-delete">&times;</a></td>
                                    </tr>
                                    <tr>
                                        <td><img src="img/food/b1.jpg" alt="Food"></td>
                                        <td>Burder</td>
                                        <td>$ 8.00</td>
                                        <td>1</td>
                                        <td>$ 8.00</td>
                                        <td><a href="#" class="btn-delete">&times;</a></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">Total</th>
                                        <th>$24.00$</th>
                                        <th></th>
                                    </tr>
                                </table>
                                <a href="order.php" class="btn-primary">Confirm Order</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navigation Section End -->

    <!-- Food Search Section Start -->
    <section class="food-search text-center" >
        <div class="container">
            <h2 style="background: #44bd32;">Foods on you search <a href="#" class="text-white">"Pizza"</a></h2>
        </div>
    </section>
    <!-- Food Search Section End -->

    <!-- Foods Section Start -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <div class="heading-border"></div>
            <div class="grid-2">
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="img/food/p1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Pizza</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Indulge in our freshly baked pizzas loaded with premium toppings, gooey cheese, and a burst of authentic flavors in every bite.</p>
                            <input type="number" value="1" min="1">
                            <input type="submit" class="btn-primary" value="Add To Cart">
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="img/food/s1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Sandwich</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Enjoy our handcrafted sandwiches, packed with fresh veggies savory spreads, and your choice of delectable filiings.</p>
                            <input type="number" value="1" min="1">
                            <input type="submit" class="btn-primary" value="Add To Cart">
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="img/food/b1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Burger</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Sink your teeth into our juicy brugers, grilled to perfection and layered with crisp lettuce, melted cheese, and a touch of our secret sauce.</p>
                            <input type="number" value="1" min="1">
                            <input type="submit" class="btn-primary" value="Add To Cart">
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="img/food/p1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Pizza</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Indulge in our freshly baked pizzas loaded with premium toppings, gooey cheese, and a burst of authentic flavors in every bite.</p>
                            <input type="number" value="1" min="1">
                            <input type="submit" class="btn-primary" value="Add To Cart">
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="img/food/s1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Sandwich</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Enjoy our handcrafted sandwiches, packed with fresh veggies savory spreads, and your choice of delectable filiings.</p>
                            <input type="number" value="1" min="1">
                            <input type="submit" class="btn-primary" value="Add To Cart">
                        </div>
                    </form>
                </div>
                <div class="food-menu-box">
                    <form action="">
                        <div class="food-menu-img">
                            <img src="img/food/b1.jpg" alt="" class="img-responsive img-curve">
                        </div>
                        <div class="food-menu-desc">
                            <h4>Burger</h4>
                            <p class="food-price">$8.00</p>
                            <p class="food-details">Sink your teeth into our juicy brugers, grilled to perfection and layered with crisp lettuce, melted cheese, and a touch of our secret sauce.</p>
                            <input type="number" value="1" min="1">
                            <input type="submit" class="btn-primary" value="Add To Cart">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Foods Section End -->

    <!-- Footer Section Start -->
    <section class="footer">
        <div class="container">
            <div class="grid-3">
                <div class="text-center">
                    <h3>About Us</h3><br>
                    <p>Welcome to J_Flavour, where taste meets convenience! We are passionate about delivering fresh, delicious, and wholesome meals straight to your doorstep. At J_Flavour, 
                        we believe in using the finest ingredients to create flavours that leave a lasting impression</p>
                    <p>Your satisfaction is our priority, and with our seamsless delivery service, we make sure your food reaches you hot and on time. Exprience the hoy of good food with
                        J_Flavour-where every bite is burst of flavour!</p>
                </div>
                <div class="texr-center">
                    <h3>Site Map</h3><br>
                    <div class="site-links">
                        <a href="categories.php">Categories</a>
                        <a href="foods.php">Foods</a>
                        <a href="order.php">Order</a>
                        <a href="contact.php">Contact</a>
                        <a href="login.php">Login</a>
                    </div>
                </div>
                <div class="social-links">
                    <h3>Social Links</h3><br>
                    <div class="social">
                        <ul>
                            <li><a href="#"><img src="https://img.icons8.com/color/48/null/facebook-new.png"/></a></li>
                            <li><a href="#"><img src="https://img.icons8.com/fluency/48/null/instagram-new.png"/></a></li>
                            <li><a href="#"><img src="https://img.icons8.com/color/48/null/twitter--v1.png"/></a></li>
                            <li><a href="#"><img src="https://img.icons8.com/color/48/null/linkedin-circled--v1.png"/></a></li>
                            <li><a href="#"><img src="https://img.icons8.com/color/48/null/youtube-play.png"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Copyright Section start -->
    <section class="copyright">
        <div class="container text-center">
            <p>All rights reserved. Design By <a href="#">Code Arcade</a></p>
        </div>
        <a id="back-to-top" class="btn-primary">
            <i class="fa fa-angle-double-up"></i>
        </a>
    </section>
    <!-- Copyright Section End -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Jquery UI -->
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>
</html>