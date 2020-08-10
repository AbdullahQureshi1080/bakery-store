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
