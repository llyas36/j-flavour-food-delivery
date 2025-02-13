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
    
    <!-- Hover CSS -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
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
                </div>                <!-- Main Menu -->
                <div class="menu text-right">
                    <ul>
                        <li><a class="hvr-underline-from-center" href="index.php">Home</a></li>
                        <li><a class="hvr-underline-from-center" href="categories.php">Categories</a></li>
                        <li><a class="hvr-underline-from-center" href="foods.php">Foods</a></li>
                        <li><a class="hvr-underline-from-center" href="order.php">Order</a></li>
                        <li><a class="hvr-underline-from-center" href="contact.php">Contact</a></li>
                        <li><a class="hvr-underline-from-center" href="login.php">Account</a></li>
                      
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navigation Section End -->

    <!-- Food Order Section Start -->
    <section class="order">
        <div class="container">
            <h2 class="text-center">Fill this form to confirm your order.</h2>
          <table class="tbl-full" border="0">
        <thead>
            <tr>
                <th>Food</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           <!--    dynamically-->
         

        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" style="text-align:right;"><b>Total:</b></td>
                <td></td>
                <td></td>
                <td>
                                <form action="submit_order.php" method="POST" class="form">
    <fieldset>
        <legend>Delivery Details</legend>

        <p class="label">Full Name</p>
        <input type="text" name="full_name" placeholder="Enter your name..." required>

        <p class="label">Phone Number</p>
        <input type="text" name="phone_number" placeholder="Enter your phone..." required>

        <p class="label">Address</p>
        <input type="text" name="address" placeholder="Enter your address..." required>

        <!-- Hidden input to store order data -->
        <input type="hidden" name="order_data" id="order_data">

        <input id="confrim-button" type="submit" value="Confirm " class="btn-primary">
    </fieldset>
</form>
                </td>
            </tr>
        </tfoot>
    </table>



        </div>
    </section>
    <!-- Food Order Section End -->

    <!-- Footer Section Start -->
    <section class="footer">
        <div class="container">
            <div class="grid-3">
                <div class="text-center">
                    <h3>About Us</h3><br>
                    <p class="about-us">Welcome to J_Flavour, where taste meets convenience! We are passionate about delivering fresh, delicious, and wholesome meals straight to your doorstep. At J_Flavour, 
                        we believe in using the finest ingredients to create flavours that leave a lasting impression
                        
                        </p>
                    <p class="about-us">Your satisfaction is our priority, and with our seamsless delivery service, we make sure your food reaches you hot and on time. Exprience the hoy of good food with
                        J_Flavour-where every bite is burst of flavour!</p>
                </div>
                <div class="texr-center">
                    <h3>Site Map</h3><br>
                    <div class="site-links">
                        <a href="categories.php">Categories</a>
                        <a href="foods.php">Foods</a>
                        <a href="order.php">Order</a>
                        <a href="contact.php">Contact</a>
                        <a href="login.php">Account</a>
                    </div>
                </div>
                <div class="social-links">
                    <h3>Social Links</h3><br>
                    <div class="social">
                        <ul>
                            <li><a href="#"><img class="nav-svg" src="./svg-files/telegram.svg" alt=""></a></li>
                            <li><a href="#"><img class="nav-svg" src="./svg-files/github.svg" alt=""></li>
                            <li><a href="#"><img class="nav-svg" src="./svg-files/linkedIN.svg" alt=""></a></li>
                            <li><a href="#"><img class="nav-svg" src="./svg-files/gmail.svg" alt=""></a></li>
                            <li><a href="#"><img class="nav-svg" src="./svg-files/Twitter.svg" alt=""></a></li>
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
            <p>All rights reserved. Design By <a href="#">OUR GROUP</a></p>
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
    <script src="js/order_confirm.js"></script>
    <script src="js/cart_confirm.js"></script>


<script>
    // Collect food data and serialize it
const orderData = [
    { name: "Pizza", price: 10, qty: 2, total: 20 },
    { name: "Burger", price: 5, qty: 1, total: 5 },
    { name: "Sandwich", price: 15, qty: 3, total: 45 },
    { name: "Kitfo", price: 12, qty; 2, total: 24},
    

];
document.getElementById('order_data').value = JSON.stringify(orderData);


</script>




</body>
</html>