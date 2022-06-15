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
    <title>Map - Park Here</title>
    <link rel="stylesheet" href="home2.css">
    <script src="https://kit.fontawesome.com/484339fc38.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <section class="header">
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

                <div class="search-box">
                    <input class="search-txt" type="text" name="" placeholder="Type To Search">
                    <a class="seach-btn" href="booking.php">
                        <i class="fa fa-magnifying-glass"></i>
                    </a>
                </div>
                <section class="Location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.682961482534!2d106.64132591413852!3d-6.30531986346118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69faad1d959e1f%3A0xa02052b7ba6ab859!2sAEON%20Mall%20BSD!5e0!3m2!1sen!2sid!4v1654932094860!5m2!1sen!2sid" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
            </div>

        </section>

        <!-- ----map---- -->

        <!-- ---footer--- -->

        <section class="footer">
            <h4>© 2022, Park Here.</h4>
            <p>We would like to develop an app that can help people from commercial place such as shopping malls,
            <br>hospitals, and hotels to solve problems such as difficulty in finding parking spots, 
            <br>unpredictable parking ticket prices, crowded parking spots, and etc</p>
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