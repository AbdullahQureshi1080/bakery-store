<!-- popup cart -->

<?php
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    // echo "The current page name is: ".$curPageName;
    // echo "</br>";
  ?>

       <div class="popup" id="popup-1">
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <div class="product-container">
          <div style="clear:both"></div>
              <br />
              <h3 >Shopping Cart</h3>
              <div class="table-responsive">
                   <table class="table table-bordered">
                        <tr  style="text-align:center;">
                             <th width="40%">Item Name</th>
                             <th width="10%">Quantity</th>
                             <th width="20%">Price</th>
                             <th width="15%">Total</th>
                             <th width="5%">Delete</th>
                        </tr>
                        <?php
                        if(!empty($_SESSION["shopping_cart"]))
                        {
                             $total = 0;
                             foreach($_SESSION["shopping_cart"] as $keys => $values)
                             {
                        ?>
                        <tr style="text-align:center;">
                             <td><?php echo $values["item_name"]; ?></td>
                             <td><?php echo $values["item_quantity"]; ?></td>
                             <td>$ <?php echo $values["item_price"]; ?></td>
                             <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                             <td><a href="<?php $curPageName?>?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><i class="far fa-trash-alt"></i></span></a></td>
                        </tr>
                        <?php
                                  $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                      $_SESSION['total'] = $total;
                             }
                        ?>
                        <tr  style="text-align:center;">
                              <td colspan="3" align="right"><Strong>Total</Strong></td>
                             <td align="center">$ <?php echo number_format($total, 2); ?></td>
                             <td></td>
                        </tr>
                        <?php
                        }
                        ?>
                   </table>
                <div class = "row" style="margin:2% auto;">
                  <button type="submit"  class="btn btn-cart"onclick="location.href = 'cart.php'">Go to Cart<i class="fas fa-cart-plus"></i></button>
                  <button class="btn btn-details" onclick="togglePopup()">Continue</button>
                </div>
              </div>
         </div>
        </div>
        </div>

      <!--  -->
