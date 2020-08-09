<!DOCTYPE html>
<html>
<head>
  <title>Document</title>

</head>
<body>
<?php

if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) ){
  $firstName = trim($_POST["firstName"]);
  $lastName = trim($_POST["lastName"]);
  $email = trim($_POST["email"]);

$conn = new mysqli("localhost","root","","practice");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  $sql = "INSERT INTO `userinfo`(`Personid`, `fname`, `lname`, `email`) VALUES (Null,'$firstName','$lastName','$email')";
  if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


  echo "<p class='divmain'>Data Stored successfully</p>";
  $conn->close();
  echo '<a href = "index.html">Return to Directory </a>';
}

?>

</body>
</html>
