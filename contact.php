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
                </div>
                <!-- Main Menu -->
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

    <!-- Contact Section Start -->
    <section class="contact">
        <div class="container">
            <h2 class="text-center">Get in touch</h2>
            <div class="heading-border"></div>

<form action="process_contact.php" method="POST" class="form">
    <fieldset>
        <legend>Contact Us</legend>
        <p class="label">Full Name</p>
        <input type="text" name="full_name" placeholder="Enter your name..." required>
        
        <p class="label">Email</p>
        <input type="email" name="email" placeholder="Enter your email..." required>
        
        <p class="label">Phone Number</p>
        <input type="text" name="phone_number" placeholder="Enter your phone..." required>
        
        <p class="label">Subject</p>
        <input type="text" name="subject" placeholder="Enter your subject..." required>
        
        <p class="label">Message</p>
        <textarea name="message" rows="5" placeholder="Enter your message..." required></textarea>
        
        <input type="submit" value="Submit" class="btn-primary">
    </fieldset>
</form>
        </div>
    </section>
    <!-- Contact Section End -->

     <!-- Map Section Start -->
     <section class="map">
        <h2 class="text-center">Find Us</h2>
        <div class="heading-border"></div>

        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d118103.45687625333!2d91.81986775!3d22.32593435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1671287502415!5m2!1sen!2sbd" ></iframe>
     </section>
     <!-- Map Section End -->

    <!-- Footer Section Start -->
    <section class="footer">
        <div class="container">
            <div class="grid-3">
                <div class="text-center">
                    <h3>About Us</h3><br>
                    <p class="about-us">Welcome to J_Flavour, where taste meets convenience! We are passionate about delivering fresh, delicious, and wholesome meals straight to your doorstep. At J_Flavour, 
                        we believe in using the finest ingredients to create flavours that leave a lasting impression</p>
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
</body>
</html>