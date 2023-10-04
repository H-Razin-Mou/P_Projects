<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="hstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>

</head>

<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><i class="fas fa-car-side m-logo"></i></div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-item"><a class="home" href="home.php"><i class="fas fa-home home-logo"></i><span class="menu-item-text">Home</span></a></li>
                    <li class="menu-item"><a class="shop" href="https://www.cars.com"><i class="fas fa-key shop-logo"></i><span class="menu-item-text">Shop</span></a></li>
                    <li class="menu-item"><a class="contact" href="contact.php"><i class="far fa-address-book contact-logo"></i><span class="menu-item-text">Contact</span></a></li>
                </ul>
            </div>
            <div class="profile-container">
                <?php echo $_SESSION['username']; ?>
                <a class="logout" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    
    <div class="img-slider">
      <div class="slide active">
        <img src="img/c1.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>BMW</h2>
          <p>ENJOY EVERY SUMMER WITH UPTO $3050 OFF</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c2.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>AUDI</h2>
          <p>PURELY ELECTRIC PERFORMANCE</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c3.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>FERRARI</h2>
          <p>ENJOY THE OPEN ROAD</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c4.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>JAGUAR</h2>
          <p>A NEW GENERATION OF ELECTRIC.</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c5.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>FERRARI</h2>
          <p>YOUR COMFORT IS OUR TOP PRIORITY.</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

      <div class="container">
        <div class="row">
          <div class="image">
            <img src="img/s1.jpg" alt="">
            <div class="details">
              <h2>BMW<span> M5</span></h2>
              <p>YO</p>
              <div class="more">
                <a href="https://www.bmwusa.com" class="read-more">Read <span>More</span></a>
                <div class="icon-links">
                  <a href="https://www.instagram.com/bmw/"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.bmwusa.com"><i class="fas fa-eye"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="image">
            <img src="img/s2.jpg" alt="">
            <div class="details">
              <h2>Ferrari<span> 365 GTB/4 Daytona</span></h2>
              <p>yo</p>
              <div class="more">
                <a href="https://www.ferrari.com/en-EN" class="read-more">Read <span>More</span></a>
                <div class="icon-links">
                  <a href="https://www.instagram.com/ferrari/"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.ferrari.com/en-EN"><i class="fas fa-eye"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="image">
            <img src="img/s3.jpg" alt="">
            <div class="details">
              <h2>Mazda<span> CX-3</span></h2>
              <p>yo</p>
              <div class="more">
                <a href="https://www.mazdausa.com/?c=usa&l=hero" class="read-more">Read <span>More</span></a>
                <div class="icon-links">
                  <a href="https://www.instagram.com/mazdausa/"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.mazdausa.com/?c=usa&l=hero"><i class="fas fa-eye"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="img-slider">
      <div class="slide active">
        <img src="img/c6.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>Buggati</h2>
          <p>WE INNOVATE</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c7.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>Ferrari</h2>
          <p>REASONABLE PRICE</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c8.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>FORD</h2>
          <p>WE CREATE</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c9.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>JAGUAR</h2> 
          <p>NEXT GEN OF CARS</p>
        </div>
      </div>
      <div class="slide">
        <img src="img/c10.jpg" alt="" class="slider-img">
        <div class="info">
          <h2>FERRARI</h2>
          <p>YOUR COMFORT IS OUR TOP PRIORITY.</p>
        </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
      </div>
    </div>

    <div class="review-title">
    <h1>Some of our satisfied customers</h1>
    </div>
      <div class="container">
        <div class="row">
          <div class="image">
            <img src="img/r1.jpg" alt="" height="360" width="400">
            <div class="details">
              <div class="more">
                <a href="https://www.instagram.com/p/CRMeKtbjTNr/" class="read-more">Read <span>More</span></a>
                <div class="icon-links">
                  <a href="https://www.instagram.com/p/CRMeKtbjTNr/"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="image">
            <img src="img/r2.jpg" alt="">
            <div class="details">
              <div class="more">
                <a href="https://www.instagram.com/p/CQuuAFTspbG/" class="read-more">Read <span>More</span></a>
                <div class="icon-links">
                  <a href="https://www.instagram.com/p/CQuuAFTspbG/"><i class="fab fa-instagram"></i></a>

                </div>
              </div>
            </div>
          </div>
          <div class="image">
            <img src="img/r3.jpg" alt="">
            <div class="details">
              <div class="more">
                <a href="https://www.instagram.com/p/CRE2I3kMGR8/" class="read-more">Read <span>More</span></a>
                <div class="icon-links">
                  <a href="https://www.instagram.com/p/CRE2I3kMGR8/"><i class="fab fa-instagram"></i></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <footer>
        <div class="footer-content">
            <h3>Car Sales</h3>
            <p>A website to Buy/Sell Used/New Cars.</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/razin.mou.100"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/_mouuuuu_/"> <i class="fab fa-instagram"></i></a></li>  
                <li><a href="https://twitter.com"> <i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/cameron.abid.1"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/neptune_tttttttttt/"> <i class="fab fa-instagram"></i></a></li>   
                <li><a href="https://twitter.com/obayed_ovi"> <i class="fab fa-twitter"></i></a></li>   
                
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2021 . Designed by <span>razin mou & obayed ullah ovi</span></p>
        </div>
    </footer>

    <script src="slider.js"></script>
</body>
</html>

<?php
}
else {
    header("Location: landing.php");
    exit();
}
?>
