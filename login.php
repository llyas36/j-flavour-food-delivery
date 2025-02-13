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

    <!-- Login Section Start -->
    <!-- Login Section Start -->
    <section id="signin" class="login">
        <div class="container">
            <h2 class="text-center">Login</h2>
            <div class="heading-border"></div>

            <!-- Display error messages -->
            <?php
            if (isset($_SESSION['unsuccess'])) {
                echo "<div class='unsuccess'>" . $_SESSION['unsuccess'] . "</div>";
                unset($_SESSION['unsuccess']);
            }
            ?>

            <form action="loginform.php" method="post" class="form">
                <fieldset>
                    <legend>Login</legend>

                    <p class="label">Email</p>
                    <input type="email" name="form_email" placeholder="Enter your email..." required>

                    <p class="label">Password</p>
                    <input type="password" name="form_password" placeholder="Enter your password..." required>

                    <input id="signin-btn" type="submit" value="Login" class="btn-primary">

                    <div class="signinsignuplink">
                        Don't have an account? <a id="show-signup" href="#signup">Signup</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- Login Section End -->

    <!-- Signup Section Start -->
    <section id="signup" class="signup hidden">
        <div class="container">
            <h2 class="text-center">Signup</h2>
            <div class="heading-border"></div>

            <!-- PHP to handle success/error messages -->
            <?php
            session_start();
            if (isset($_SESSION['success'])) {
                echo "<div class='success'>" . $_SESSION['success'] . "</div>";
            } elseif (isset($_SESSION['unsuccess'])) {
                echo "<div class='unsuccess'>" . $_SESSION['unsuccess'] . "</div>";
            }
            unset($_SESSION['success']);
            unset($_SESSION['unsuccess']);
            ?>

            <!-- Signup Form -->
            <form action="signupdb.php" method="post" class="form">
                <fieldset>
                    <legend>Signup</legend>
                    <p class="label">Name</p>
                    <input type="text" name="form_name" placeholder="Enter your name..." required>
                    <p class="label">Email</p>
                    <input type="email" name="form_email" placeholder="Enter your email..." required>
                    <p class="label">Password</p>
                    <input type="password" name="form_password" placeholder="Enter your password..." required>
                    <input id="signup-btn" type="submit" value="Signup" class="btn-primary">
                    <div class="signinsignuplink">
                        Already have an account? <a id="show-signin" href="#signin">Signin</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- Signup Section End -->

    <script>
    // Get the necessary elements
    const signupSection = document.getElementById('signup');
    const loginSection = document.getElementById('signin');
    const showLoginLink = document.getElementById('show-signin');
    const showSignupLink = document.getElementById('show-signup');

    // Add event listeners to switch between signin and signup
    showLoginLink.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior
        signupSection.classList.add('hidden'); // Hide signup section
        loginSection.classList.remove('hidden'); // Show login section
    });

    showSignupLink.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default link behavior
        loginSection.classList.add('hidden'); // Hide login section
        signupSection.classList.remove('hidden'); // Show signup section
    });
    </script>

    <!-- Login Section End -->

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
    <!-- Footer Section End <--></-->

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

    <style>
        html {
    scroll-behavior: smooth;
}
    .
    .logo{
      border-radius: 5px;
    }

    </style>

    <script>
    // Attach click event listener to the button
    document.querySelector('.btn-primary').addEventListener('click', function() {
        // Scroll to the #signin section
        document.getElementById('signin').scrollIntoView({
            behavior: 'smooth', // Smooth scrolling effect
            block: 'start'     // Align to the start of the section
        });
    });
</script>
</body>
</html>
