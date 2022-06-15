<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="with=device-width", initial-scale="1.0">
    <title>About Us - Park Here</title>
    <link rel="stylesheet" href="home2.css">
    <script src="https://kit.fontawesome.com/484339fc38.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <section class="sub-header">
            <nav>
                <a href="home.html"><img src="images/Logo ParkHere.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT US</a></li>
                        <li><a href="map.php">MAP</a></li>
                        <li><a href="pricing.php">PRICING</a></li>
                        <li><a href="login.php">LOG OUT</a></li>
                        <li><a href=""><?php echo strtoupper($user_data ['user_name']); ?></a></li>
                    </ul>
                </div>
            </nav>

            <h1>LAYOUT</h1>

        </section>

        <!-- ---content--- -->

        <section class="about-us">
            <div class="row">
                <div class="about-col">
                    <h1>Parking Slot Available</h1>
                    <p>Slot Total : 96/117
                    <br>VIP Slot Total : 4/8
                    <br><br>
                    <a href="layout.php" class="hero-btn purple-btn">REFRESH</a>
                </div>
                <div class="about-col">
                    <img src="images/parking layout2.png" alt="">
                </div>
            </div>
        </section>

        <!-- ---footer--- -->

        <section class="footer">
            <h4>© 2022, Park Here.</h4>
            <div class="icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
            </div>
            <p>Our Socials</p>
        </section>

    </body>
</html>