<?php

require_once("connection.php");
$database = Database::getInstance();
$mysqli = $database->getConnection();

if(!isset($_POST['cake-shape']) ||
!isset($_POST['cake-size']) ||
!isset($_POST['cake-flavor']) ||
!isset($_POST['cake-filling']) ||
!isset($_POST['cake-icing']) ||
!isset($_POST['cake-layer']) ||
!isset($_POST['cake-quantity']) ||
!isset($_POST['cake-theme']) ||
!isset($_POST['email']) ||
!isset($_POST['cake-image']) ||
 !isset($_POST['cake-message']) ||
 !isset($_POST['email']) ||
!isset($_POST['cake-image']) ) {
 die('We are sorry, but there appears to be a problem with the form you submitted.');
 }

 $cake_shape = $_POST['cake-shape'];
 $cake_size = $_POST['cake-size'];
 $cake_flavor = $_POST['cake-flavor'];
$cake_filling = $_POST['cake-filling'];
 $cake_icing = $_POST['cake-icing'];
 $cake_layer = $_POST['cake-layer'];
 $cake_quantity = $_POST['cake-quantity'];
 $cake_theme = $_POST['cake-theme'];
 $cake_message = $_POST['cake-message'];
 $email = $_POST['email'];
 $image = $_POST['cake-image'];

 $error_message = "";


// Form Validation

$cakeshape_exp = '|^[a-zA-Z ]{2,20}$|';
if(empty($_POST['cake-shape'])){
   $error_message = 'cake-shape field required.<br />';
} else {
   $shape = test_input($_POST['cake-shape']);
   if(!preg_match($cakeshape_exp,$shape)) {
      $error_message .= 'cake shape must contain atleast two alphabets, no numbers allowed.<br />';
      }
}
$cakesize_exp = "|^[0-9]{1}$|";
if(empty($_POST['cake-size'])){
   $error_message = 'cake-size field required.<br />';
} else {
   $size = test_input($_POST['cake-size']);
   if(!preg_match($cakesize_exp,$size)) {
      $error_message .= 'enter number only .<br />';
      }
}
$cakeflavor_exp = "|^[a-zA-Z]{2,20}$|";
if(empty($_POST['cake-flavor'])){
   $error_message = 'cake-flavor field required.<br />';
} else {
   $flavor = test_input($_POST['cake-flavor']);
   if(!preg_match($cakeflavor_exp,$flavor)) {
      $error_message .= 'enter alphabets.<br />';
      }
}
$cakefilling_exp = "|^[a-zA-Z ]{2,20}$|";
if(empty($_POST['cake-filling'])){
   $error_message = 'cake-filling field required.<br />';
} else {
   $filling = test_input($_POST['cake-filling']);
   if(!preg_match($cakefilling_exp,$filling)) {
      $error_message .= 'cake filling.<br />';
      }
}
$cakeicing_exp = "|^[a-zA-Z ]{2,20}$|";
if(empty($_POST['cake-icing'])){
   $error_message = 'cake-icing field required.<br />';
} else {
   $icing = test_input($_POST['cake-icing']);
   if(!preg_match($cakeicing_exp,$icing)) {
      $error_message .= 'cake icing.<br />';
      }
}
$cakelayer_exp = "|^[0-9]{1}$|";
if(empty($_POST['cake-layer'])){
   $error_message = 'cake-layer field required.<br />';
} else {
   $layer = test_input($_POST['cake-layer']);
   if(!preg_match($cakelayer_exp,$layer)) {
      $error_message .= 'cake layer.<br />';
      }
}
$cakequantity_exp = "|^[0-9]{1}$|";
if(empty($_POST['cake-quantity'])){
   $error_message = 'cake-quantity field required.<br />';
} else {
   $quantity = test_input($_POST['cake-quantity']);
   if(!preg_match($cakequantity_exp,$quantity)) {
      $error_message .= 'cake quantity.<br />';
      }
}
$caketheme_exp = "|^[a-zA-Z ]{1,20}$|";
if(empty($_POST['cake-theme'])){
   $error_message = 'cake-theme field required.<br />';
} else {
   $theme = test_input($_POST['cake-theme']);
   if(!preg_match($caketheme_exp,$theme)) {
      $error_message .= 'cake theme.<br />';
      }
}
$cakemessage_exp = "|^[a-zA-Z0-9 ]{1,70}$|";
if(empty($_POST['cake-message'])){
   $error_message = 'cake-message field required.<br />';
} else {
   $message = test_input($_POST['cake-message']);
   if(!preg_match($cakemessage_exp,$message)) {
      $error_message .= 'cake message.<br />';
      }
}
$email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
if(empty($_POST['email'])){
   $error_message = 'email field required.<br />';
} else {
   $email = test_input($_POST['email']);
   if(!preg_match($email_exp,$email)) {
      $error_message .= 'email.<br />';
      }
}


// store To database

if(strlen($error_message) > 0) {
   echo $error_message;
   }
else{

   $sql = "INSERT INTO `order-details`(`cake_shape`, `cake_size`, `cake_flavor`, `cake_filling`, `cake_icing`, `cake_layer`, `cake_quantity` , `cake_theme`, `cake_message`, `email`, `image`)
   VALUES ('$cake_shape', '$cake_size', '$cake_flavor', '$cake_filling', '$cake_icing', '$cake_layer', '$cake_quantity', '$cake_theme', '$cake_message', '$email', '$image')";

   if ($mysqli->query($sql) === TRUE){
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . "<br>" . $msqli->error;
   }

   // echo '<script>alert("Data Stored Successfully")</script>';
   // $conn->close();


// Email Confirmation
//
// $to_email = "adnx1080@gmail.com";
// $body = array(
//    'cake Shape' => $_POST['cake-shape'],
//    'cake Size' => $_POST['cake-size'],
//    'cake Flavor' => $_POST['cake-flavor'],
//    'cake Filling' => $_POST['cake-filling'],
//    'cake Icing' => $_POST['cake-icing'],
//    'cake Layer' => $_POST['cake-layer'],
//    'cake Quantity' => $_POST['cake-quantity'],
//    'cake Theme' => $_POST['cake-theme'],
//    'cake Message' => $_POST['cake-message'],
//    'Image' => $_POST['cake-image'],
//    'Total Price' => 1000
//  );
$subject = "Custom Order Details";
$body = "Wecome to Centeral Perk";
$headers = "From: sender email";

if (mail($email, $subject, $body, $headers)) {
    echo '<script>alert("Email Sent Successfully")</script>';
} else {
   echo '<script>alert("Fail to send email")</script>';
}

   echo '<script>window.location="../index.php"</script>';
//   echo '<a href = "index.html">Return to Directory </a>';

}


function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
