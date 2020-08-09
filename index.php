<?php
include("database/cartHandling.php");
include("cartDiv.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a85268a0dd.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/cart.css" type="text/css" />
  <link rel="icon" href="images/favicon2.ico" />
  <title>Central Perk</title>
</head>

<body>
  <?php
  include("cartDiv.php");
  ?>
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


<!--- Introduction section -------------------->
  <!-- <div class="row"> -->
    <div class="intro-section">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/lava4.jpg" class="carousel-img" alt="lavacake">
            <div class="carousel-caption d-none d-md-block">
              <h1>Molten Lava Cake</h1>
              <p>Enriched with choclate inside, vanilla icecream frosting outside</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/cake2.jpg" class="carousel-img" alt="cake">
            <div class="carousel-caption d-none d-md-block">
              <h1>Cakes</h1>
              <p>Homemade excellence that makes you wonder</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/muffins2.jpg" class="carousel-img" alt="muffins">
            <div class="carousel-caption d-none d-md-block">
              <h1>Muffins</h1>
              <p>Choclate muffins that you can't stop eating</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  <!-- </div> -->

<!---about-bakery-section -------------------->

<!-- <div class  = "row"> -->
  <div class = "about-bakery-section">
    <div class = "row">
      <div class = "col-lg-6">
        <h2 class = "big-heading">Welcome to Central perk</h2>
        <p>
          Ought these are balls place mrs their times add she.
          Taken no great widow spoke of it small. Genius use except son esteem merely her limits.
           Sons park by do make on. It do oh cottage offered cottage in written.
           Especially of dissimilar up attachment themselves by interested boisterous.
           Linen mrs seems men table.
          Jennings dashwood to quitting marriage bachelor in.
           On as conviction in of appearance apartments boisterous.
        </p>
      </div>
      <div class = "col-lg-6">
        <img class = "about-bakery-section-img" src = "images/bakery.jpg" alt = "bakery"/>
      </div>
    </div>
  </div>
<!-- </div> -->

<!---featured-section -------------------->

<!-- <div class  = "row"> -->
  <div class = "featured-section">
    <div class = "row">
      <div class = "feature-section-heading">
        <h3 class = "big-heading">Our Featured Cakes</h3>
        <p>Our most desirable delicacies. <br />Order them Now</p>
          <!-- <a href="shop.php">
            <div class = "btn-shop">
        Visit Shop <i class="fas fa-store"></i>
        </div></a> -->
        <button class = "btn btn-shop" onclick="location.href='shop.php'">Visit Shop <i class="fas fa-store"></i></button>
      </div>
      <div class = "box-container">
        <div class = "box">
          <span style="--i:1;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/arivals-2.jpg"></a></span>
          <span style="--i:2;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-2.jpg"></a></span>
          <span style="--i:3;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-3.jpg"></a></span>
          <span style="--i:4;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-4.jpg"></a></span>
          <span style="--i:5;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-5.jpg"></a></span>
          <span style="--i:6;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-6.jpg"></a></span>
          <span style="--i:7;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-7.jpg"></a></span>
          <span style="--i:8;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-8.jpg"></a></span>
          <span style="--i:9;"><a onclick="location.href = 'product-details.php?itemName=Chocalate Cupcake';"><img src = "images/c-feature-9.jpg"></a></span>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->

<!---our-services-section -------------------->

<!-- <div class = "row"> -->
  <div class= "our-services-section">
    <div class = "our-services-section-heading">
      <h3 class = "big-heading">Main Services We Provide</h3>
    </div>
    <div class = "row our-services">
      <div class = "col-md-4">
        <img src = "images/bakery.png"/>
        <h3>Sweet Bakery Products</h3>
        <p>
          All sweet delicacies such as cupcakes, muffins etc. You name it we bake it.
        </p>
      </div>
      <div class = "col-md-4">
        <img src = "images/birthday.png"/>
        <h3>Cakes</h3>
        <p>
          All type of cakes, homemade deliciousness at best. You name it we bake it.
        </p>
      </div>
      <div class = "col-md-4">
        <img src = "images/party.png"/>
          <h3>Parties</h3>
        <p>
          We also provide catering services for small to large gatherings. We've got you covered.
        </p>
      </div>
    </div>
  </div>
<!-- </div> -->

<!---customer-testimonials-section -------------------->

<!-- <div class = "row"> -->
  <div class= "customer-testimonials-section">
    <div class="testimonials">
      <div class="inner-testimonials">
        <h1>Testimonials</h1>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="images/customer3.jpg" alt="">
              <div class="name">Full name</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="images/customer1.jpg" alt="">
              <div class="name">Full name</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="images/customer2.jpg" alt="">
              <div class="name">Full name</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->

<!---footer-section -------------------->

<!-- <div class = "row"> -->
<div class = "footer">
  <div class = "row">
    <div class = "col-sm-3">
      <h3>Central <span>Perk</span></h3>
      <p>
        Apartments simplicity or understood do it we.
         Song such eyes had and off.
         Removed winding ask explain delight out few behaved lasting.
      </p>
    </div>
    <div class = "col-sm-3 col-sm2">
      <h5>Quick links</h5>
      <ul>
        <li><a href = "#">Checkout</a></li>
        <li><a href = "#">Shop</a></li>
        <li><a href = "#">Terms&Conditions</a></li>
      </ul>
    </div>
    <div class = "col-sm-3 col-sm-2">
      <h5>Work Times</h5>
      <ul>
        <li>Mon : Fri 8am - 8pm</li>
        <li>Sat : 9am - 4pm</li>
        <li>Sun : Closed</li>
      </ul>
    </div>
    <div class = "col-sm-3">
      <h5>Contact Info</h5>

      <ul>
        <li>(03xx-23232383)</li>
        <li>centralperk2020@gmail.com</li>
      </ul>
      <div class = "social-icons">
        <a class = "fb"><i class="fab fa-facebook fa-2x"></i></a>
        <a class = "insta"><i class="fab fa-instagram fa-2x"></i></a>
        <a class = "tw"><i class="fab fa-twitter fa-2x"></i></a>
        <a class= "git"><i class="fab fa-github fa-2x"></i></a>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
</body>

</html>
