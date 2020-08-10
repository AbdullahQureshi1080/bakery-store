<?php
session_start();
require_once("connection.php");
$database = Database::getInstance();
$mysqli = $database->getConnection();
$item = $_GET['p'];
$query = "SELECT * FROM product_details WHERE product_id = '$item'";
$result = $mysqli->query($query) or die($mysqli->error);
$data = array();
$data = $result->fetch_assoc();
// header('Location: shop.php');
?>
