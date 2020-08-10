<?php
session_start();
include "database/connection.php";
$database = Database::getInstance();
$mysqli = $database->getConnection();
$ip_add = getenv("REMOTE_ADDR");
if(isset($_POST["category"])){
	$query = "SELECT * FROM category_products";

	$run_query = $mysqli->query($query) or die($mysqli->error);
	echo "
            <h5>Product Categories</h5>
	";
	if(mysqli_num_rows($run_query) > 0){
        $i=1;
		while($row = $run_query -> fetch_array(MYSQLI_ASSOC)){
			$cid = $row["category_id"];
			$cat_name = $row["category_name"];
			if($cid != 1){
            $sql = "SELECT COUNT(*) AS count_items FROM product_details WHERE category='$cat_name'";
            $query = $mysqli->query($sql);
            $row = $query -> fetch_array(MYSQLI_ASSOC);
            $count=$row["count_items"];
            $i++;
			}
			else{
				$sql = "SELECT COUNT(*) AS count_items FROM product_details";
				$query = $mysqli->query($sql);
				$row = $query -> fetch_array(MYSQLI_ASSOC);
				$count=$row["count_items"];
				$i++;
			}
			echo "
									<a href='#' class = 'btn-filter category' cid='$cat_name'>
										<span  ></span>
										$cat_name
										<small class='qty'>($count)</small>
									</a>

 ";
		}
		echo "</div>";
	}
}


if(isset($_POST["get_seleted_Category"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		if($id != 'All'){
    	$sql = "SELECT * FROM product_details,category_products WHERE category_name = '$id' AND category=category_name";
		}
		else{
			   $sql = "SELECT * FROM product_details ORDER BY product_id ASC";
	 	}
	 }
	else{
        $sql = "SELECT * FROM product_details ORDER BY product_id ASC";
    }

	$run_query = $mysqli->query($sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['category'];
			$pro_title = $row['product_name'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_img'];
			echo '
            <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="card">
              <form method="post" action="shop.php?action=add&id='.$pro_id.'">
                <div class="inner">
                  <img src="'.$pro_image.'" class="card-img-top" alt="something" >
                </div>
                <div class="card-body">
                  <h3 class = "price-tag"><span>'.$pro_price.'</span>$</h3>
                  <p class="card-text"><span class = "item-name" onclick="getItemName(this.innerHTML);">'.$pro_title.'</span></p>
                  <input type="hidden" name="hidden_name" value="'.$pro_title.'" />
                  <input type="hidden" name="hidden_price" value="'.$pro_price.'" />
                  <button type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-cart" >Add to Cart<i class="fas fa-cart-plus"></i></button>
                  <button type="submit" class="btn btn-details" onclick="location.href = "product-details.php?p='.$pro_id.'";">Details<i class="fas fa-info-circle"></i></button>
                </div>
              </form>
        </div>
   </div>
			';
		}
	}

    if(isset($_POST["getProduct"])){
            $limit = 50;

        $product_query = "SELECT * FROM product_details ORDER BY product_id ASC";
        $run_query = $mysqli->query($product_query);
        if(mysqli_num_rows($run_query) > 0){
            while($row = mysqli_fetch_array($run_query)){
                $pro_id    = $row['product_id'];
                $pro_cat   = $row['category'];
                // $pro_brand = $row['product_brand'];
                $pro_title = $row['product_name'];
                $pro_price = $row['product_price'];
                $pro_image = $row['product_img'];
                // $cat_name = $row["category"];
                echo '
                <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                  <form method="post" action="shop.php?action=add&id='.$pro_id.'">
                    <div class="inner">
                      <img src="'.$pro_image.'" class="card-img-top" alt="something" >
                    </div>
                    <div class="card-body">
                      <h3 class = "price-tag"><span>'.$pro_price.'</span>$</h3>
                      <p class="card-text"><span class = "item-name" onclick="getItemName(this.innerHTML);">'.$pro_title.'</span></p>
                      <input type="hidden" name="hidden_name" value="'.$pro_title.'" />
                      <input type="hidden" name="hidden_price" value="'.$pro_price.'" />
                      <button type="submit" name="add_to_cart" value="Add to Cart" class="btn btn-cart" >Add to Cart<i class="fas fa-cart-plus"></i></button>
                      <a class="btn btn-details" href="product-details.php?p='.$pro_id.'">Details<i class="fas fa-info-circle"></i></a>
                    </div>
                  </form>
            </div>
            </div>

                ';
            }
        }
    }






?>
