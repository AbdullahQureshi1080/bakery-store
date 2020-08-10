<?php
include("database/productdetails.php");
include("components/cartDiv.php");
?>

<!doctype html>

<html lang="en">

<head>
<?php include("components/header.php") ?>
<body>

  <!--- Navigation bar -------------------->

<?php include("components/navbar.php") ?>

  <!--- Product-details section -------------------->

  <!-- <div class="row"> -->
    <div class="product-details">
      <div class="banner-container">
        <img class="banner-img" src="images/banner-bg.jpg" />
        <div class="banner-text">
          <h3>Product Details</h3>
          <p><span>Home</span> <i class="fas fa-chevron-right"></i> Product Details </p>
        </div>
      </div>
      <div class="row details-product">
        <form method="post" class = "row" action="shop.php?action=add&id=<?php echo $data["product_id"]?>">
        <div class="col-sm-6">
          <img class="product-img" src="<?php echo $data['product_img']; ?>" alt="brown-cake" />
        </div>
        <div class="col-sm-6">
          <div class="row info">
            <h3>
              <?php echo $data['product_name']; ?>
            </h3>
            <!-- <hr/> -->
            <p>
              <?php echo $data['product_subtitle']; ?>
            <!-- <hr/> -->
          </div>
          <div class="row price-quantity">
            <span>Price : $<span id = "price"><?php echo $data['product_price']; ?></span></span>
            <div class="form-group">
              <!-- <label name="Quantity">Quantity :</label>
              <input class="input-quantity" type="number" name="quantity-number" placeholder="1" maxlength="2" size="2" /> -->
              <input type="hidden" name="hidden_name" value="<?php echo $data['product_name']; ?>" />
              <input type="hidden" name="hidden_price" value="<?php echo $data['product_price']; ?>" />

            </div>
            <button type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-cart" >Add to Cart<i class="fas fa-cart-plus"></i></button>
          </div>
        </div>
      </form>
      <!-- </div> -->

      <!-- <div class="row"> -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- <h3>Default Tab</h3> -->

              <div class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="#tab_default_1" data-toggle="tab">
                        Description </a>
                    </li>
                    <li>
                      <a href="#tab_default_2" data-toggle="tab">
                        Specifications </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                      <p>
                        <?php echo $data['product_desc']; ?>
                      </p>
                    </div>
                    <div class="tab-pane" id="tab_default_2">
                      <p>
                        <?php echo $data['product_specs']; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- </div> -->

          <div class="similar-products">
            <h2>Similar Products</h2>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-6">
                <div class="card show">
                  <div class="inner">
                    <img src="images/c-feature-8.jpg" class="card-img-top" alt="Vanilla Choclate Cupcake">
                  </div>
                  <div class="card-body">
                      <h3 class = "price-tag"><span>29</span>$</h3>
                    <p class="card-text"><span class = "item-name" onclick="getItemName(this.innerHTML);">Vanilla Chocolate Cupcake</span></p>
                    <button type="button" class="btn btn-cart" >Add to Cart<i class="fas fa-cart-plus"></i></button>
                    <button type="button" class="btn btn-details" onclick="location.href = 'product-details.php?itemName=Vanilla Cupcake';">Details<i class="fas fa-info-circle"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <div class="card show">
                  <div class="inner">
                    <img src="images/c-feature-3.jpg" class="card-img-top" alt="Chocolate Brownie">
                  </div>
                  <div class="card-body">
                      <h3 class = "price-tag"><span>29</span>$</h3>
                    <p class="card-text"><span class = "item-name" onclick="getItemName(this.innerHTML);">Chocolate Brownie</span></p>
                    <button type="button" class="btn btn-cart" >Add to Cart<i class="fas fa-cart-plus"></i></button>
                    <button type="button" class="btn btn-details" onclick="location.href = 'product-details.php?itemName=Chocalate Brownie';">Details<i class="fas fa-info-circle"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <div class="card show">
                  <div class="inner">
                    <img src="images/c-feature-6.jpg" class="card-img-top" alt="Vanilla Forest Cake">
                  </div>
                  <div class="card-body">
                      <h3 class = "price-tag"><span>100</span>$</h3>
                    <p class="card-text"><span class = "item-name" onclick="getItemName(this.innerHTML);">Vanilla Forest Cake</span></p>
                    <button type="button" class="btn btn-cart" >Add to Cart<i class="fas fa-cart-plus"></i></button>
                    <button type="button" class="btn btn-details" onclick="location.href = 'product-details.php?itemName=Vanilla Cake';">Details<i class="fas fa-info-circle"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <div class="card show">
                  <div class="inner">
                    <img src="images/c-feature-9.jpg" class="card-img-top" alt="Strawberry Cupcake">
                  </div>
                  <div class="card-body">
                      <h3 class = "price-tag"><span>29</span>$</h3>
                    <p class="card-text"><span class = "item-name" onclick="getItemName(this.innerHTML);">Strawberry Cupcake</span></p>
                    <button type="button" class="btn btn-cart" >Add to Cart<i class="fas fa-cart-plus"></i></button>
                    <button type="button" class="btn btn-details" onclick="location.href = 'product-details.php?itemName=Strawberry Cupcake';">Details<i class="fas fa-info-circle"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



        <!---footer-section -------------------->


        <div class = "footer">
          <?php include("components/footer.php") ?>
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type = "text/javascript" src = "js/cart.js"></script>
</body>

</html>
