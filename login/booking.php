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
    <title>Park Here</title>
    <link rel="stylesheet" href="home2.css">
    <script src="https://kit.fontawesome.com/484339fc38.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <section class="headerParking">
            <nav>
                <a href="index.php"><img src="images/Logo ParkHere.png" alt=""></a>
                <div class="nav-links" id="navLinks">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT US</a></li>
                        <li><a href="map.php">MAP</a></li>
                        <li><a href="pricing.php">PRICING</a></li>
                        <li><a href="">LOG OUT</a></li>
                        <li><a href=""><?php echo strtoupper($user_data ['user_name']); ?></a></li>
                    </ul>
                </div>
            </nav>

            <h1>Booking</h1>

        </section>

        <!-- ---content--- -->

        <section class="booking">
            <div class="row">
                <div class="booking-col">
                    <h1>Aeon Mall Parking Lot</h1>
                    <p>Address: Jl. MH. Thamrin, Citaringgul, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810
                    <br><i class="fa-solid fa-square-parking"></i> : 96/117 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-circle-dollar-to-slot"></i> : Rp. 12.000
                    <br>Open ⋅ Closes 10PM
                    <br>Phone: (021) 84214540
                    </p>
                    <a href="payment.php" class="hero-btn book-btn">BOOK NOW</a>
                    <a href="layout.php" class="hero-btn book-btn">LAYOUT</a>
                </div>
                <div class="booking-col">
                    <img src="images/booking.jpg" alt="">
                </div>
            </div>
        </section>

        <!-- ---footer--- -->

        <section class="footer">
            <p>© 2022, Park Here.</p>
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