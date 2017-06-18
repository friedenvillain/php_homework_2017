<?php
session_start();

if(isset($_SESSION["ID"])){

	$id = $_SESSION["ID"];
	$name = $_SESSION["name"];
	$price = $_SESSION["pirce"];
	$quantity = $_SESSION["quantity"];

	setcookie($id."[ID]", $id, time()+3600);
	setcookie($id."[name]", $name, time()+3600);
	setcookie($id."[pirce]", $pirce, time()+3600);
	setcookie($id."[quantity]", $quantity, time()+3600);
}
header("Location: shoppingcart.php");
?>