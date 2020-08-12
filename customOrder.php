<?php
include("database/cartHandling.php");
include("components/cartDiv.php");
// require_once("database/orderFormHandling.php");
?>

<!doctype html>
<html lang="en">

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
             <h3>Custom Order</h3>
             <p><span>Home</span> <i class="fas fa-chevron-right"></i> Custom Order </p>
           </div>
         </div>
       </div>
       <!--  -->


  <!-- cards -->

<div class="main">
     <div class="bestseller-title">
       <h3 id="bestseller-title">Best Sellers</h3>
     </div>
     <div class="row" id = "get_Custom_product">
					<!-- Product main img -->

				</div>
				<!-- /row -->
</div>




  <!-- Custom Form -->
  <div class=" contact-form">
  <h1>Order your customized cake now</h1>
  <hr>

  <form  method="post" action="database/orderFormHandling.php" name="form">
  <div class="row">

      <div class="col-md-6">
          <div class="form-group">
              <label for="cake-shape" >Cake Shape</label>
              <input type="text" name="cake-shape" class="form-control" placeholder="e.g round,heart" required>
          </div>

          <div class="form-group">
              <label for="cake-size">Cake size</label>
              <input type="text" name="cake-size" class="form-control" placeholder="enter in inches (0-9)" required>
          </div>

          <div class="form-group">
              <label for="cake-flavor">Flavor</label>
              <input type="text" name="cake-flavor" class="form-control" placeholder="e.g chocolate,vanilla" required>
          </div>

          <div class="form-group">
              <label for="cake-filling">Filling</label>
              <input type="text" name="cake-filling" class="form-control" placeholder="e.g butter frosting" required>
          </div>
          <div class="form-group">
              <label for="cake-icing">Icing</label>
              <input type="text" name="cake-icing" class="form-control" placeholder="e.g abc" required>
          </div>

          <div class="form-group">
              <label for="cake-layer">Layers</label>
              <input type="text" name="cake-layer" class="form-control" placeholder="e.g abc" required>
          </div>

      </div>

      <div class="col-md-6">

          <div class="form-group">
              <label for="cake-quantity">Quantity</label>
              <input type="text" name="cake-quantity" class="form-control" placeholder="enetr quantity" required>
          </div>

          <div class="form-group">
              <label for="cake-theme">Theme </label>
              <input type="text" name="cake-theme" class="form-control" placeholder="enter theme" required>
          </div>

          <div class="form-group">
              <label for="cake-message">Massage on cake</label>
              <textarea  class="form-control" name="cake-message" placeholder="write cake message/special instructions" rows="5"></textarea>
          </div>

          <div class="form-group">
              <label for="email">your email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter your email address" required>
          </div>

          <div class="form-group">
              <label for="cake-theme">Upload Image of Sample cake: </label>
              <input type="file" class="file-upload-input" onchange="readURL(this);" accept="image/*" name="cake-image" class="form-control" placeholder="Upload Image">
          </div>

      </div>

  </div>
  <div class="button-group">
      <button class="btn btn-primary btn-block" id="placeOrder">Place Order</button>
  </div>
      </form>
  </div>







  <!---footer-section -------------------->

  <!-- <div class="row"> -->
  <div class="footer">
  <?php include("components/footer.php") ?>
  </div>
  <!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
    <script type = "text/javascript" src = "js/script.js"></script>
</body>

</html>
