<?php
include("database/cartHandling.php");
include("components/cartDiv.php");
?>
<!doctype html>
<html lang="en">

<?php include("components/header.php") ?>

<body>
  <!--- Navigation bar -------------------->

<?php include("components/navbar.php") ?>

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
<?php include("components/footer.php") ?>
</div>
<!-- </div> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
</body>

</html>
