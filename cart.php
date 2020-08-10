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

         <!-- popup cart -->

         <div class="shop-details">
           <div class="banner-container">
             <img class="banner-img" src="images/banner-bg.jpg" />
             <div class="banner-text">
               <h3>Cart</h3>
               <p><span>Home</span> <i class="fas fa-chevron-right"></i> Cart </p>
             </div>
           </div>
         </div>

<!-- ******************************************************* -->
<div class = "cart-table-container">
  <div style="clear:both"></div>
                 <br />
                 <div class = "big-heading center-head">
                     <h3>Shopping Cart</h3>
                 </div>

                 <div class="table-responsive">
                      <table class="table table-bordered">
                           <tr  style="text-align:center;">
                                <th width="40%">Item Name</th>
                                <th width="10%">Quantity</th>
                                <th width="20%">Price</th>
                                <th width="15%">Total</th>
                                <th width="5%">Action</th>
                           </tr>
                           <?php
                           if(!empty($_SESSION["shopping_cart"]))
                           {
                                $total = 0;
                                foreach($_SESSION["shopping_cart"] as $keys => $values)
                                {
                           ?>
                           <tr  style="text-align:center;">
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td>$ <?php echo $values["item_price"]; ?></td>
                                <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a></td>
                           </tr>
                           <?php
                                     $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                     $_SESSION['total'] = $total;
                                }
                           ?>
                           <tr>
                                <td colspan="3" align="right"><Strong>Total</Strong></td>
                                <td align="center">$ <?php echo number_format($total, 2); ?></td>
                                <td></td>
                           </tr>
                           <?php
                           }
                           ?>
                      </table>
                      <div class = "row" style="margin:2% auto;">
                        <button type="submit"  class="btn btn-cart"onclick="location.href = 'checkout.php'">Checkout<i class="fas fa-cart-plus"></i></button>
                        <button class="btn btn-details" onclick="location.href = 'shop.php'">Continue</button>
                      </div>
                 </div>
</div>

           <!-- </div> -->

  <!---footer-section -------------------->

    <!-- <div class="row"> -->
    <div class="footer">
    <?php include("components/footer.php") ?>
    </div>
    <!-- </div> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
</body>

</html>
