<?php
session_start();

if (isset($_POST["Item"])) {
	
	$_SESSION["quantity"] = $_POST["quantity"];
	$id = $_POST["Item"];
	$_SESSION["ID"] = $id;

	switch (strtoupper($id)) {
		case 'S001':
			$_SESSION["Name"] = "10 吋變形平板";
			$_SESSION["Price"] = 12000;
			break;
		case 'S002':
			$_SESSION["Name"] = "15.6 吋筆記型電腦";
			$_SESSION["Price"] = 27000;
			break;
			case 'S003':
			$_SESSION["Name"] = "iPhone 手機";
			$_SESSION["Price"] = 21000;
			break;
	}
	header("Location: savecart.php");
}

echo '<form action="" method="post">
選擇商品: 
<select name="Item">
 	<option value="S001">10吋變形平板 - $12000</option>
  	<option value="S002">15.6吋筆記型電腦 - $27000</option>
  	<option value="S003">iPhone手機 - $21000</option> 
</select>
<input type="text" size="5" name="quantity" value="1"/>
<input type="submit" value="訂購"/>
</form>';
?>