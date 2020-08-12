<?php
include("database/cartHandling.php");
include("components/cartDiv.php");
    session_destroy();
?>

<!DOCTYPE html>
<html>
<?php
    include("components/header.php");

    ?>

<body>

    <div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead" style="color:black "><strong></strong> Your order has been placed.</p><br>
        <p style="color:black ">Order confirmation email has been sent to your email address </p>
  <hr>

  <p class="lead">
    <a class="btn btn-primary btn-sm" href="index.php" role="button">
      Continue to homepage</a>
  </p>
</div>

    <div class="footer">
    <?php
    include("components/footer.php")
    ?>
    </div>

    </body>
</html>
