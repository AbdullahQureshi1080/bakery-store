<?php
// session_start();
include("database/cartHandling.php");
include("components/cartDiv.php");
?>

<!doctype html>
<html lang="en">
  <head>
  <?php include("components/header.php") ?>
  </head>
  <body>
    <!--- Navigation bar -------------------->
    <?php include("components/navbar.php") ?>

<!---Banner-section Shop -------------------->
  <!-- <div class="row"> -->
  <div class="shop-details">
    <div class="banner-container">
      <img class="banner-img" src="images/banner-bg.jpg" />
      <div class="banner-text">
        <h3>Checkout</h3>
        <p><span>Home</span> <i class="fas fa-chevron-right"></i> Checkout </p>
      </div>
    </div>
  </div>
  <!-- </div> -->


    <div class="container" id="check-out-container">
  <div class="py-5 text-center">
    <h2>Checkout</h2>
  </div>

  <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">
            <?php
            if(empty($_SESSION['shopping_cart'])){
              echo 0;
            }
          else{
            echo count($_SESSION['shopping_cart']);
          }
          ?>
          </span>
        </h4>
        <ul class="list-group mb-3">

         <!-- Product main img -->
         <?php

         // $loopIndex = count($_SESSION['shopping_cart']);
         if(empty(isset($_SESSION['shopping_cart']))){
           echo "Cart is empty. Purchase Something !";
         }
       else{
         // echo count($_SESSION['shopping_cart']);
         if (!empty(isset($_SESSION['shopping_cart'])))
         {
          for($i=0; $i<count($_SESSION['shopping_cart']); $i++)
           {
           echo '
           <li class="list-group-item d-flex justify-content-between lh-condensed">
             <div>
                <h6 class="my-0">'.$_SESSION["shopping_cart"][$i]["item_name"].'</h6>
                 </div>
                 <div>
                     <span class="text-muted">$'.$_SESSION["shopping_cart"][$i]["item_price"].'</span>
                     <small  class="text-muted bg-light">x</small>
                     <small class="text-muted">'.$_SESSION["shopping_cart"][$i]["item_quantity"].'</small>
                 </div>

               </li>
           ';
}
}
       }

                 ?>
                 <!-- <li class="list-group-item d-flex justify-content-between bg-light">
                   <div class="text-success">
                     <h6 class="my-0">Promo code</h6>
                     <small>EXAMPLECODE</small>
                   </div>
                   <span class="text-success">-$5</span>
                 </li> -->
                 <li class="list-group-item d-flex justify-content-between">
                   <span>Total (USD)</span>
                   <strong>$
                     <?php
                       echo $_SESSION['total'];
                   ?></strong>
                 </li>
                 <!-- <form class="card p-2">
                   <div class="input-group">
                     <input type="text" class="form-control" placeholder="Promo code">
                     <div class="input-group-append">
                       <button type="submit" class="btn btn-secondary">Redeem</button>
                     </div>
                   </div>
                 </form> -->
                    </ul>
               </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
        <!-- form name="myForm" class="needs-validation" novalidate---->
      <form id ="myForm" name='myForm' onsubmit="return validate();" method="post" action="database/checkoutFormHandling.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="" value="" >
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="" value="" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>



        <div class="mb-3">
          <label for="email">Email </label>
          <input   class="form-control" name="email" id="email" placeholder="you@example.com" >
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>


        <div class="row">
               <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="state">
              <option value="-1">Choose...</option>
                <option>Punjab</option>
                <option>Balochistan</option>
                <option>Sindh</option>
                <option>Khyber Pakhtunkhwa</option>
                <option>Islamabad Capital Territory</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="country">City</label>
            <select class="custom-select d-block w-100" id="city" name="city">
              <option value="-1">Choose...</option>
                 <option>Karachi</option>
                 <option>Lahore</option>
                 <option>Rawalpindi</option>
                 <option>Multan</option>
                 <option>Islamabad</option>
                 <option>Sialkot</option>
                 <option>Faisalabad</option>
                 <option>Jhelum</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" >
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" onclick="myFunc();" checked >
            <label class="custom-control-label" for="paypal">Cash on Delivery</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" onclick="myFunc();" >
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
        </div>


      <div class = "row" style="display:none" id = "hide">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="ccnumber">Credit card number</label>
            <input type="text" class="form-control" id="ccnumber" name="ccnumber" placeholder="" >
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="ccexpiration">Expiration</label>
            <input type="text" class="form-control" id="ccexpiration" name="ccexpiration" placeholder="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cccvv">CVV</label>
            <input type="text" class="form-control" id="cccvv" name="cccvv" placeholder="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
      </div>

        <hr class="mb-4">
        <button  class="btn btn-checkout"  value="Submit" id="submit" type="submit" onclick="check();">Confirm Order</button>
      </form>
    </div>
  </div>
</div>


    <!---footer-section -------------------->

<!-- <div class = "row"> -->
  <div class="footer">
    <?php include("components/footer.php") ?>
  </div>
<!-- </div> -->






        <!--- Javascript form validation -------------------->


<script>
function check(){
  var total = <?php echo $_SESSION['total']; ?>;
  if(total == 0 ){
    alert("No Item in cart. Buy Something");
    alert("redirectiong to shop");
    document.getElementById("myForm").action="shop.php";
    // window.location = "shop.php";
  }

}
function myFunc(){
  var getCheckbox = document.getElementById("credit");
  if(getCheckbox.checked){
    document.getElementById("hide").style.display="block";
  }
  else{
    document.getElementById("hide").style.display="none";
  }
}

</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type = "text/javascript" src = "js/cart.js"></script>
<script src= "js/form-validation.js"></script>
</body>
</body>
</html>
