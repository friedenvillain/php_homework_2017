<?php
include("db_connect.php");

if(isset($_POST["username"]) && isset($_POST["blood"]) && isset($_POST["address"]) && isset($_POST["email"]) && isset($_POST["hobby"]) && isset($_POST["e_contactname"]) && isset($_POST["e_contacttel"])){


	$name = $_POST["username"];
	$blood = $_POST["blood"];
	$addr = $_POST["address"];
	$email = $_POST["email"];
	$hobby = $_POST["hobby"];
	$contactname = $_POST["e_contactname"];
	$contacttel = $_POST["e_contacttel"];

	$insert = "insert tour(tName,tblood,tAddr,tEmail,thoby,tContactname,tContacttel) value('$name','$blood','$addr','$email','$hoby','$contactname','$contacttel')";
	$result = mysqli_query($link,$insert);
}

?>