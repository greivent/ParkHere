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
    <link rel="stylesheet" href="book.css">
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

            <h1>Payment</h1>

        </section>

        <!-- ---content--- -->

        <section class="about-us">
        <form action="reservation.php" method="post">
            <div class="elem-group">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="visitor_name" placeholder="willy" pattern=[A-Z\sa-z]{3,20} required>
            </div>

            <div class="elem-group">
              <label for="email">Your E-mail</label>
              <input type="email" id="email" name="visitor_email" placeholder="willy.yen@email.com" required>
            </div>

            <div class="elem-group">
              <label for="phone">Your Phone</label>
              <input type="tel" id="phone" name="visitor_phone" placeholder="0123-4567-8900" pattern=(\d{4})-?\s?(\d{4})-?\s?(\d{4}) required>
            </div>

            <hr>
            <div class="elem-group inlined">
              <label for="adult">Vehicle</label>
              <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
            </div>

            <div class="elem-group inlined">
              <label for="checkin-date">Check-in Date</label>
              <input type="date" id="checkin-date" name="checkin" required>
            </div>

            <div class="elem-group inlined">
              <label for="checkout-date">Chek-in Time</label>
              <input type="time" id="checkout-date" name="checkout" required>
            </div>

            <div class="elem-group">
              <label for="room-selection">Select Floor Preference</label>
              <select id="room-selection" name="room_preference" required>
                  <option value="">Choose a Floor from the List</option>
                  <option value="Random">Random</option>
                  <option value="B2">B2</option>
                  <option value="B1">B1</option>
                  <option value="G">G</option>
                  <option value="UG">UG</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
              </select>
            </div>

            <hr>
            <div class="elem-group">
              <label for="message">Anything Else?</label>
              <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
            </div>
            
            <button class="payment-submit" type="submit">Book Now</button>
          </form>
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

