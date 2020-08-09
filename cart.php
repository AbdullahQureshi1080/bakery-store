<?php
// session_start();
// require_once("database/connection.php");
// print_r($_SESSION["shopping_cart"]);
// // foreach ($_SESSION["shopping_cart"] as $key => $value) {
// //   echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
// // }
// echo $_SESSION['shopping_cart'][0]['item_id'];
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
  <link rel="stylesheet" href="css/style.css" type="text/css" />
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
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script type = "text/javascript" src = "js/cart.js"></script>
</body>

</html>
