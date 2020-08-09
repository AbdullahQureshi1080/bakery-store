<?php
include("database/cartHandling.php");
include("cartDiv.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a85268a0dd.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/aboutUsStyle.css" type="text/css" />
  <link rel="stylesheet" href="css/cart.css" type="text/css" />
  <link rel="icon" href="images/favicon2.ico" />
  <title>Central Perk</title>
</head>
<body>

      <!--- Navigation bar -------------------->
      <nav class="navbar navbar-expand-lg navbar-style">
        <a class="navbar-brand nav-logo" href="index.php">
          <img class="logo-img" src="images/logo2.png" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-style" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="shop.php">Main Shop</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="customOrder.php">Custom Order</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="cart.php">Cart Page</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="checkout.php">Checkout Page</a>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li> -->
            <li class="nav-item">
            <a class="nav-link"  onclick="togglePopup()"><i class="fas fa-shopping-cart"></i><span>
              <?php
              if(empty($_SESSION['shopping_cart'])){
                echo 0;
              }
            else{
              echo count($_SESSION['shopping_cart']);
            }
            ?>
            </span></a>
            </li>
          </ul>
        </div>
      </nav>


<!---Banner-section Shop -------------------->
  <!-- <div class="row"> -->
  <div class="shop-details">
    <div class="banner-container">
      <img class="banner-img" src="images/banner-bg.jpg" />
      <div class="banner-text">
        <h3>Shop</h3>
        <p><span>Home</span> <i class="fas fa-chevron-right"></i> Shop </p>
      </div>
    </div>
  </div>
  <!-- </div> -->

     <!---Our Approach section -------------------->

   <div class="textbox" >
        <h1>Our Backery Approach</h1>
        <p>
            Central Perk has a unique in-store live baking facility, which produces one of the finest quality products in the country
            Central Perk simply does not compromise on quality and standards, so be ensured that the product you buy shall not disappoint you! Working with the slogan of You and Central Perk, we know what our customers demand.
            Therefore, we make sure that we not only provide you with the best of the products but also take care of the health and hygiene matters.
       Our Bakery has a vast product range of about 140 articles, ranging from muffins, bread, croissants, cookies, cakes and other snacks. Our chefs specialize in creating delicious treats for all occasions, be they celebration cakes or tasty treats for day to day indulgence.
        </p><br>

        <!-- <button class="lmbutton"type="button">Learn More</button> -->

      </div>

    <!---backery approach images -------------------->

<div class="row image-container">
  <div class="column3">
    <img src="images/approach1.jpg"  style="width:100%">
  </div>
    <div class="column3">
    <img src="images/approach2.jpg"  style="width:100%">
  </div>
          <div class="column3">
    <img src="images/approach3.jpg"  style="width:100%">
  </div>
    </div>

      <!---slide show -------------------->


 <div class="textbox" >
        <p>
            Central Perk has a unique in-store live baking facility, which produces one of the finest quality products in the country
            Central Perk simply does not compromise on quality and standards, so be ensured that the product you buy shall not disappoint you! Working with the slogan of You and Central Perk, we know what our customers demand.
            Therefore, we make sure that we not only provide you with the best of the products but also take care of the health and hygiene matters.
       Our Bakery has a vast product range of about 140 articles, ranging from muffins, bread, croissants, cookies, cakes and other snacks.
       Our chefs specialize in creating delicious treats for all occasions, be they celebration cakes or tasty treats for day to day indulgence.
        </p><br>

        <!-- <button class="lmbutton"type="button">Learn More</button> -->

      </div>



    <div class="slideshow-container">

  <div class="mySlides">

    <img src="images/slide1.jpg" style="width:100%">
  </div>

  <div class="mySlides">

    <img src="images/slide2.jpg" style="width:100%">
  </div>

  <div class="mySlides">

    <img src="images/slide3.jpg" style="width:100%">
  </div>


  <div style="text-align:center">
    <span class="dot" ></span>
    <span class="dot" ></span>
    <span class="dot" ></span>
  </div>
</div>

<!--
<div style="text-align:center">
  <span class="dot" ></span>
  <span class="dot" ></span>
  <span class="dot" ></span>
</div> -->

     <!---Recipes video container -------------------->

     <div class="textbox" >
        <p>
            Central Perk has a unique in-store live baking facility, which produces one of the finest quality products in the country
            Central Perk simply does not compromise on quality and standards, so be ensured that the product you buy shall not disappoint you! Working with the slogan of You and Central Perk, we know what our customers demand. Therefore, we make sure that we not only provide you with the best of the products but also take care of the health and hygiene matters.</p>
      </div>


 <header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="images/newvideo.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Central Perk</h1>
        <p class="lead mb-0">Backery Store</p>
      </div>
    </div>
  </div>
</header>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>We start with perhaps the most technically accomplished of the methods known as the creaming method.  With this method the butter and sugar are beaten together using plenty of elbow grease until the mix turns pale and creamy. At this point the eggs can be added, bit by bit, followed by the dry ingredients.

The tricky bit is to avoid the mixture curdling once the eggs are added which can split the mixture resulting in an less than appetizing tough or dry bake.</p>
        <p>If you want to save on washing up, go for a simple all in one bake. Exactly as the name suggests, all the measured ingredients go into the bowl together and the mixing is done in a matter of minutes. </p>
        <p>Another very straight forward technique, this method tends to yield moister and denser cakes like a rich chocolate cake or fruit cake, as there's no beating or whisking involved to aerate the mix.</p>

      </div>
    </div>
  </div>
</section>

    <!---Our cheffs -------------------->

    <div id="design-cast">
    <div class="ourchefftext">
        <div class="cheffs">
            <h1>Our chefs </h1>
            <p> Quality and safety of food is our<br>
                  top priority Chefs go through<br>
                a 4-stage evaluation . process to<br>
                 ensure you only order<br>
                from trusted chefs.<br>
                </p>
        </div>
    </div>
    <div class = "zoom" >
        <img src="images/cheff5.jpg" class="img-responsive img-thumbnail" alt="Responsive image" />
        <div class="name">Irsa Qamar
            <br />Expert in cake making</div>
    </div>
    <div  class = "zoom" >
        <img src="images/cheff2.jpg" class="img-responsive img-thumbnail" alt="Responsive image" />
        <div class="name">Abdullah Najam
            <br />Expert in Donut making</div>
    </div>
    <div  class = "zoom">
        <img src="images/cheff3.jpg" class="img-responsive img-thumbnail" alt="Responsive image" />
        <div class="name">Asad Baig
            <br />Expert in Cookie making</div>
    </div>
</div>


    <!---footer-section -------------------->

<!-- <div class = "row"> -->
  <div class="footer">
    <div class="row">
      <div class="col-sm-3">
        <h3>Central <span>Perk</span></h3>
        <p>
          Apartments simplicity or understood do it we.
          Song such eyes had and off.
          Removed winding ask explain delight out few behaved lasting.
        </p>
      </div>
      <div class="col-sm-3 col-sm2">
        <h5>Quick links</h5>
        <ul>
          <li><a href="#">Checkout</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="#">Terms&Conditions</a></li>
        </ul>
      </div>
      <div class="col-sm-3 col-sm-2">
        <h5>Work Times</h5>
        <ul>
          <li>Mon : Fri 8am - 8pm</li>
          <li>Sat : 9am - 4pm</li>
          <li>Sun : Closed</li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5>Contact Info</h5>

        <ul>
          <li>(03xx-23232383)</li>
          <li>centralperk2020@gmail.com</li>
        </ul>
        <div class="social-icons">
          <a class="fb"><i class="fab fa-facebook fa-2x"></i></a>
          <a class="insta"><i class="fab fa-instagram fa-2x"></i></a>
          <a class="tw"><i class="fab fa-twitter fa-2x"></i></a>
          <a class="git"><i class="fab fa-github fa-2x"></i></a>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->


       <script>
       var slideIndex = 0;
       showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}

    </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
</body>
</html>
