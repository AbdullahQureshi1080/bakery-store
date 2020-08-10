<?php
session_start();
require_once("connection.php");
$database = Database::getInstance();
$mysqli = $database->getConnection();
$_SESSION['total']=0;

// ------------------------------Previous Code Below------------------->
if (isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"], $item_array_id))
    {
      // $cart_count = 1;
      $item_array = array(
        'item_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'item_price' => $_POST["hidden_price"],
        'item_quantity'=>1
          // 'item_quantity'=>$POST["quantity-number"]
      );
      array_push($_SESSION['shopping_cart'],$item_array);
    }

    else{
      for($i = 0; $i<count($_SESSION["shopping_cart"]); $i++){
        if($_SESSION["shopping_cart"][$i]["item_name"] == $_POST["hidden_name"]){
          $_SESSION["shopping_cart"][$i]["item_quantity"]++;
        }
      }
    }
  }

  else
  {
    $item_array = array(
      'item_id' => $_GET["id"],
      'item_name' => $_POST["hidden_name"],
      'item_price' => $_POST["hidden_price"],
      'item_quantity' => 1
      // 'item_quantity'=>$POST["quantity-number"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}
if(isset($_GET["action"]))
{
     if($_GET["action"] == "delete")
     {
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
               if($values["item_id"] == $_GET["id"])
               {
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Item Removed")</script>';
                    // echo '<script>window.location="customOrder.php"</script>';
               }
          }
     }
}

 ?>
