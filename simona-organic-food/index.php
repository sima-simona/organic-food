 <?php
 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organic Food</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,400&family=PT+Sans&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
   

<body>

<!--Section login-->
<div class="section login" >
         <div class="main-wrapper">
            <div class="nav-login">
                        <?php
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit">Logout</button></form>';
                            } else {
                                echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="uid" placeholder="Username" />
                            <input type="password" name="pwd" placeholder="Password" />
                            <button class="login" type="submit" name="submit">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>';
                            }
                        ?> 
                        <?php
                if(isset($_SESSION['u_id'])) {
                    echo "<p>Welcome to Organic Solutions!</p>";
                }
              ?>     
             </div>
        </div>
</div>


    <!--Section page header-->
    <div class="section page-header">
        <div class="navigation">
            <div class="logo">
                <a href="#">
                    <img src="assets/logo.png" alt="">
                </a>
            </div>
        <nav class=navbar>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Mega Menu</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Contact</a></li>
                   <li><button class="menu-single-button">Get Webify Today</button></li>
            </ul>
            </nav>
        </div>
        <div class="hero">
            <div class="hero-text">
                <h1>Organic & natural healthy lifestyle</h1>
                <p>Performance review synergize productive mindfulness for downselect and horsehead offer.</p>
                <button class="hero-button">Discover More</button>
            </div>
            <div class="hero-img ">
                <img src="assets/hero.png" alt="">
            </div>
        </div>
    </div>
    </div>
    <!--Section clients-->
    <div class="section clients">
        <div class="client-single">
            <a href="#">
                <img src="assets/client-4.png" alt="">
            </a>
        </div>
        <div class="client-single">
            <a href="#">
                <img src="assets/client-1.png" alt="">
            </a>
        </div>
        <div class="client-single">
            <a href="#">
                <img src="assets/client-3.png" alt="">
            </a>
        </div>
        <div class="client-single">
            <a href="#">
                <img src="assets/client-2.png" alt="">
            </a>
        </div>
        <div class="client-single">
            <a href="#">
                <img src="assets/client-5.png" alt="">
            </a>
        </div>
    </div>
    <!--Section slides-->
    <div class="section slides">
        <div class="slide-title">
            <h4>Organic Business Features</h4>
            <h2>Our Unique Features</h2>
        </div>
    <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="assets/leaf.png" alt="">
    <h6>100% Organic</h6>
    <p>Cobbler's pose, bound angle pose staff pose bow.</p>
     <a href="#">Learn More</a>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="assets/leaf.png" alt="">
    <h6>100% Organic</h6>
    <p>Cobbler's pose, bound angle pose staff pose bow.</p>
     <a href="#">Learn More</a>
  </div>

  <div class="mySlides fade">
  <img src="assets/leaf.png" alt="">
    <h6>100% Organic</h6>
    <p>Cobbler's pose, bound angle pose staff pose bow.</p>
     <a href="#">Learn More</a>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
        </div>
    </div>
    <!--Section juice-->

    <div class="section juice">

        <div class="juice-text">
            <div class="juice-title">
                <h6>Set up your website in minutes and bring your brand to life.</h6>
                <h3>Organic. Fresh. Natural. Everything you ever need.</h3>
            </div>
            <div class="juice-leaf">
                <div class="juice-leaf-single">
                    <img src="assets/white-leaf.png" alt="">
                    <h6>100% Organic</h6>
                    <p>Cobbler's pose, bound angle pose staff pose bow.</p>
                </div>
                <div class="juice-leaf-single">
                    <img src="assets/white-leaf.png" alt="">
                    <h6>100% Organic</h6>
                    <p>Cobbler's pose, bound angle pose staff pose bow.</p>
                </div>
                <div class="juice-leaf-single">
                    <img src="assets/white-leaf.png" alt="">
                    <h6>100% Organic</h6>
                    <p>Cobbler's pose, bound angle pose staff pose bow.</p>
                </div>
            </div>
        </div>
        <div class="juice-img">
            <img src="assets/hero-2.png" alt="">
        </div>

    </div>

    <!--Section contac-->
    <div class="contact">
        <div class="contact-title">
            <h3>Our Handpicked Products</h3>
        </div>
        <div class="form">
            <form class="contact-form" action="includes/contact.inc.php" method="post">
                <div class="single-field">
                    <label for="name">Your name</label>
                    <input type="text" name="name">
                </div>
                <div class="single-field">
                    <label for="email">Your email</label>
                    <input type="text" name="email">
                </div>
                <div class="single-textarea">
                    <label for="message">Message</label>
                    <textarea name="message"></textarea>
                </div>
                <button type="submit" name="submit">Send</button>
            </form>
        </div>
    </div>

    </div>
    <!--Section Organic solution-->

    <div class="section organic-solution">

        <div class="organic-solution-text">
            <h6>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</h6>
            <h3>The convenient & affordable Organic solution.</h3>
            <button class="organic-solution-button">Get Organic</button>
        </div>



    </div>
    <!--Section fruits-->
    <div class="fruits">
        <div class="fruits-title">
            <h6>Daily Blog journal</h6>
            <h3>Organic Food Blog</h3>
        </div>
        <div class="fruits-pics">
            <div class="single-fruit">
                <img src="assets/feature-1.png" alt="">
                <p>8 Easy Pieces I’ve Worn Over & Over to Have it All</p>
                <span>David Beck </span> <span class="span-break">  April 13, 2019</span>
            </div>
            <div class="single-fruit">
                <img src="assets/feature-2.png" alt="">
                <p>8 Easy Pieces I’ve Worn Over & Over to Have it All</p>
                <span>David Beck </span> <span class="span-break">  April 13, 2019</span>
            </div>
            <div class="single-fruit">
                <img src="assets/feature-3.png" alt="">
                <p>8 Easy Pieces I’ve Worn Over & Over to Have it All</p>
                <span>David Beck </span> <span class="span-break">  April 13, 2019</span>
            </div>
            <div class="single-fruit">
                <img src="assets/feature-4.png" alt="">
                <p>8 Easy Pieces I’ve Worn Over & Over to Have it All</p>
                <span>David Beck </span> <span class="span-break">  April 13, 2019</span>
            </div>
        </div>
    </div>
    <!--Section last page-->
    <div class="section last-page">

        <div class="page-footer">
            <div class="page-footer-resources">
                <h3>Resources</h3>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
                <a href="#">Terms & Conditions</a>
            </div>

            <div class="page-footer-social">
                <h3>Social Media</h3>
                <div>
                    <img src="assets/social-1.png" alt="">
                    <a href="">Facebook</a>
                </div>
                <div>
                    <img src="assets/social-2.png" alt="">
                    <a href="">Instagram</a>
                </div>
                <div>
                    <img src="assets/social-3.png" alt="">
                    <a href="">Twitter</a>
                </div>

            </div>
            <div class="page-footer-address">
                <h3>Address</h3>
                <p>497 Evergreen Rd. Roseville, CA 95673</p>
                <p>+44 345 678 903 </p>
                <p>adobexd@mail.com</p>
            </div>
        </div>
        <div class="footer">
            <h3> © Built with pride and caffeine. All rights reserved.</h3>
        </div>
    </div>

    <script src="scripts/script.js"></script>
</body>

</html>