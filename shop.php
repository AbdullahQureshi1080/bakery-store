
<?php
include("database/cartHandling.php");
include("components/cartDiv.php");
?>

<!doctype html>
<html lang="en">

<?php include("components/header.php") ?>;

<body>
  <!--- Navigation bar -------------------->
<?php include("components/navbar.php") ?>;


  <!---Banner-section Shop -------------------->

  <div class="shop-details">
    <div class="banner-container">
      <img class="banner-img" src="images/banner-bg.jpg" />
      <div class="banner-text">
        <h3>Shop</h3>
        <p><span>Home</span> <i class="fas fa-chevron-right"></i> Shop </p>
      </div>
    </div>
  </div>


  <!--- main-shop -------------------------------------->

  <div class="shop-section">
    <div class="row">
      <div class="col-lg-3">
        <div class="product-categories">
          <div class="categories-link" id = "get_category">

          </div>

        </div>

        <div class="top-products">
          <div class="sale-products">
            <h5>Top Sale Products</h5>
            <div class="pro-sale">
              <img class="pro-sale-img" src="images/c-feature-5.jpg" />
              <div class = "star-review">
                <p>Chocalate Cake</p>
                <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </p>
              </div>
            </div>
            <div class="pro-sale">
              <img class="pro-sale-img" src="images/arivals-2.jpg" />
              <div class = "star-review">
                <p>Plain Cupcake</p>
                <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half"></i>
                </p>
              </div>
            </div>
            <div class="pro-sale">
              <img class="pro-sale-img" src="images/c-feature-6.jpg" />
              <div class = "star-review">
                <p>Vanilla Forest Cake</p>
                <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half"></i>
                </p>
              </div>
            </div>
            <div class="pro-sale">
              <img class="pro-sale-img" src="images/c-feature-3.jpg" />
              <div class = "star-review">
                <p>Chocalate Brownie</p>
                <p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-9">

         <div class="row" id="get_product">

          </div>

         </div>

    </div>
 </div>



  <!---footer-section -------------------->

  <div class="footer">
    <?php include("components/footer.php") ?>
  </div>

  <!-- <script src = "js/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js">
  // <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/script.js"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
  <!-- <script type = "text/javascript" src = "js/new.js"></script> -->
</body>

</html>
