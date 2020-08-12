<?php
include("database/cartHandling.php");
include("components/cartDiv.php");
?>
<!DOCTYPE html>
<html>

<?php include("components/header.php") ?>

<body>

      <!--- Navigation bar -------------------->
      <?php include("components/navbar.php") ?>


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
  <?php include("components/footer.php") ?>
  </div>
<!-- </div> -->



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
  <script type = "text/javascript" src = "js/aboutUs.js"></script>
</body>
</html>
