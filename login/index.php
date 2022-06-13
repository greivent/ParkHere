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
    <title>Home - Park Here</title>
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

            <div class="text-box">
                <h1>Park Here</h1>
                <p>Welcome to Park Here parking web application!! Park here makes it easier to book your parking spots in your 
                <br>desired location, if you forgot where you park your vehicle, you can easily find it in your booking history
                <br>park here also have a membership feature that gives a lot of benefits
                <br><br>
                <a href="" class="hero-btn">Learn more about us</a>
            </div>

        </section>

        <!-- ---feature--- -->

        <section class="feature">
            <h1>Features We Provide</h1>
            <p></p>

            <div class="row">
                <div class="feature-col">
                    <h3>Parking Spot Finder</h3>
                    <p>Park Here provides a Parking Spot Finder for users so users can find a parking spot without any troubles using this app</p>
                </div>
                <div class="feature-col">
                    <h3>In-App Google Maps</h3>
                    <p>Park Here provides a In-App Google Maps so user can find places easily and a list of how many empty parking spots each building has</p>
                </div>
                <div class="feature-col">
                    <h3>Membership</h3>
                    <p>Park Here has a membership feature that user can use to enjoy the special perks such as VIP Parking, No Ads, etc.</p>
                </div>
            </div>
            
        </section>

        <!-- ---partner--- -->

        <section class="partner">
            <h1>Our Partners</h1>
            <p></p>

            <div class="row">
                <div class="partner-col">
                    <img src="images/Grand-Indonesia.jpg" alt="">
                    <div class="layer">
                        <h3>Grand Indonesia</h3>
                    </div>
                </div>
                <div class="partner-col">
                    <img src="images/Senayan_City.jpg" alt="">
                    <div class="layer">
                        <h3>Senayan City</h3>
                    </div>
                </div>
                <div class="partner-col">
                    <img src="images/Aeon-Mall.jpg" alt="">
                    <div class="layer">
                        <h3>Aeon Mall</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ---membership--- -->

        <section class="membership">
            <h1>Membership Features</h1>
            <p></p>

            <div class="row">
                <div class="member-col">
                    <h3>VIP Parking</h3>
                    <p>With VIP Parking, user don't have to worry about finding parking spot anymore as there will be VIP Parking Spots for them</p>
                </div>
                <div class="member-col">
                    <h3>No Ads</h3>
                    <p>Ads can be annoying and with subscribing to the membership, user can enjoy the Park Here app without any ads</p>
                </div>
        </section>

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