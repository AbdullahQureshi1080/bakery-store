<?php
session_start();
require_once("connection.php");
$database = Database::getInstance();
$mysqli = $database->getConnection();

if(
!isset($_POST['firstName']) ||
!isset($_POST['lastName']) ||
!isset($_POST['email']) ||
!isset($_POST['address']) ||
!isset($_POST['zip']))
 {
 die('We are sorry, but there appears to be a problem with the form you submitted.');
 }

 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $zip = $_POST['zip'];


 $error_message = "";


// Form Validation

$firstName_exp = '|^[A-Za-z]+$|';
if(empty($_POST['firstName'])){
   $error_message = 'First name is required.<br />';
} else {
   $firstName = test_input($_POST['firstName']);
   if(!preg_match($firstName_exp,$firstName)) {
      $error_message .= 'first name should be alphabets , no digits or special characters allowed<br />';
      }
}
   
$lastName_exp = "|^[A-Za-z]+$|";
if(empty($_POST['lastName'])){
   $error_message = 'last name is required .<br />';
} else {
   $lastName = test_input($_POST['lastName']);
   if(!preg_match($lastName_exp,$lastName)) {
      $error_message .= 'last name should be alphabets , no digits or special characters allowed..<br />';
      }
}
$email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
if(empty($_POST['email'])){
   $error_message = 'email is required.<br />';
} else {
   $email = test_input($_POST['email']);
   if(!preg_match($email_exp,$email)) {
      $error_message .= 'enter email in the format abc@xyz.com.<br />';
      }
}
//$address_exp = "";
//if(empty($_POST['address'])){
//   $error_message = 'address is required.<br />';
//} else {
//   $address = test_input($_POST['address']);
//   if(!preg_match($address_exp,$address)) {
//      $error_message .= 'incorrect format enter in correct format.<br />';
//      }
//}

$zip_exp = "|^[0-9]{5}$|";
if(empty($_POST['zip'])){
   $error_message = 'zip field required.<br />';
} else {
   $zip = test_input($_POST['zip']);
   if(!preg_match($zip_exp,$zip)) {
      $error_message .= 'Enter zip in the format xxxxx.<br />';
      }
}
   


// store To database

if(strlen($error_message) > 0) {
   echo $error_message;
   }
else{
     $order_id = rand(5, 15);  
     $total_bill = $_SESSION["total"];
      $order_info = array($order_id,$total_bill);
      $order = serialize($order_info);
    
    

    $sql = "INSERT INTO `userinfo`(`cartdata`, `firstName`, `lastName`, `email`,`address`,`zip`) VALUES ('$order','$firstName','$lastName','$email','$address','$zip')";

   if ($mysqli->query($sql) === TRUE){
      echo "";
   } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
   }
}


$subject = "Order confirmation";
$body = "Your Order has been placed successfully";
$headers = "From: sender email";

if (mail($email, $subject, $body, $headers)) {
    echo '<script>alert("Email Sent Successfully")</script>';
} else {
   echo '<script>alert("Fail to send email")</script>';
}

echo '<script>window.location="../thankyou.php"</script>';
//   echo '<a href = "index.html">Return to Directory </a>';




function test_input($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
