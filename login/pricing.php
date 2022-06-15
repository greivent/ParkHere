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
    <title>pricing - Park Here</title>
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
                <h1>Membership</h1>
                <p>Upgrade to Our membership now to get the benefits provided in our application
                </p>
                <a href="" class="hero-btn">Learn more about the membership</a>
            </div>

        </section>

        <!-- ----membership---- -->

        <div class="container">
          <h2>Choose your plan</h2>
          <div class="price-row">
            <div class="price-col">
              <p>Bronze</p>
              <h3>Rp. 15.000,00</h3>
              <ul>
                <li>Remove Ads</li>
              </ul>
              <button>Add To Cart</button>
            </div>
            <div class="price-col">
              <p>Silver</p>
              <h3>Rp. 50.000,00</h3>
              <ul>
                <li>Remove Ads</li>
                <li>Booking System</li>
              </ul>
              <button>Add To Cart</button>
            </div>
            <div class="price-col">
              <p>Gold</p>
              <h3>Rp. 150.000,00</h3>
              <ul>
                <li>Remove Ads</li>
                <li>Booking System</li>
                <li>VIP Parking</li>
              </ul>
              <button>Add To Cart</button>
            </div>
          </div>
        </div>

        <!-- ----footer---- -->

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