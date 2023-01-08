<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles_vendo.css">
	<title>Document</title>
</head>
<body>
	<h1>Vendo Machine</h1>
	<form action="" method="get">
		<fieldset>
			<legend>Products</legend>
			<input type="checkbox" name="choice[]" value="1">Coke - 15<br>
			<input type="checkbox" name="choice[]" value="2">Sprite - 20<br>
			<input type="checkbox" name="choice[]" value="3">Royal - 20<br>
			<input type="checkbox" name="choice[]" value="4">Pepsi - 15<br>
			<input type="checkbox" name="choice[]" value="5">Mountain Dew - 20<br>
		</fieldset>
		<fieldset>
			<legend>Option</legend>
			Size : <select name="drpSize">
					<option value="Regular" >Regular</option>
					<option  value="Up-Size">Up-Size (add &#x20B1;5)</option>
					<option  value="Jumbo">Jumbo (add &#x20B1;10)</option>
				</select>
				<input type="number" name="txtNumber" id="txtNumber[]" min="0" max="1000000"  value="0">

				<input type="submit" name="btnProcess" value="Checkout">
		</fieldset>
		
	</form>
	
</body>
	<?php

		if(isset($_GET["btnProcess"]) && isset($_GET["choice"])){
			echo"<hr>";
			echo "<h3><b>Purchase Summary:</b></h3>";
				
			$_qty = $_GET["txtNumber"];
			$_drinks = $_GET["choice"];
			$c = count($_drinks);
			$size = $_GET["drpSize"];
			$price = 0.0;

				for ($i=0; $i < $c; $i++) { 
					if($_drinks[$i] ==1){
						switch ($size) {
							case 'Regular':
								$price =  15 * $_qty ;
								break;
							case "Up-Size":
								$price = (5 + 15) * $_qty;
								break;
							case "Jumbo":
								$price = (10 + 15 ) * $_qty;
								break;

						}
						if (($_qty <= 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] . " piece of Regular Coke amounting to &#x20B1;" .  15 * $_qty."</li>";
							echo"</ul>";
							
						}
						elseif(($_qty > 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] . " pieces of Regular Coke amounting to &#x20B1;" .  15 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." piece of Up-Size Coke amounting to &#x20B1;" . 20 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Up-Size Coke amounting to &#x20B1;" . 20 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." piece of Jumbo Coke amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Jumbo Coke amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}

					}
					if($_drinks[$i] ==2){
						switch ($size) {
							case 'Regular':
								$price =  $price + 20 * $_qty ;
								break;
							case "Up-Size":
								$price =  $price +(5 + 20) * $_qty;
								break;
							case "Jumbo":
								$price =  $price +(10 + 20) * $_qty;
								break;
						}
						if (($_qty <= 1) && ($size == "Regular")){
							echo"<ul>";
								echo "<li>".$_GET["txtNumber"] . " piece of Regular Sprite amounting to &#x20B1;" .  20 * $_qty."</li>";
							echo"</ul>";	
						}
						elseif(($_qty > 1) && ($size == "Regular")){
							echo"<ul>";
								echo "<li>". $_GET["txtNumber"] ." pieces of Regular Sprite amounting to &#x20B1;" . 20 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo "<li>". $_GET["txtNumber"] ." piece of Up-Size Sprite amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo "<li>". $_GET["txtNumber"] ." pieces of Up-Size Sprite amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo "<li>". $_GET["txtNumber"] ." piece of Jumbo Sprite amounting to &#x20B1;" . 30 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo "<li>". $_GET["txtNumber"] ." pieces of Jumbo Sprite amounting to &#x20B1;" . 30 * $_qty."</li>";
							echo"</ul>";
						}
					}		
					if($_drinks[$i] ==3){
						switch ($size) {
							case 'Regular':
								$price =  $price + 20 * $_qty ;
								break;
							case "Up-Size":
								$price =  $price +(5 + 20) * $_qty;
								break;
							case "Jumbo":
								$price = $price + (10 + 20) * $_qty;
								break;
						}
						if (($_qty <= 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] . " piece of Regular Royal amounting to &#x20B1;" .  20 * $_qty."</li>";
							echo"</ul>";
							
						}
						elseif(($_qty > 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Regular Royal amounting to &#x20B1;" . 20 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." piece of Up-Size Royal amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Up-Size Royal amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." piece of Jumbo Royal amounting to &#x20B1;" . 30 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Jumbo Royal amounting to &#x20B1;" . 30 * $_qty."</li>";
							echo"</ul>";
						}
					}		
					if($_drinks[$i] ==4){
						switch ($size) {
							case 'Regular':
								$price =  $price + 15 * $_qty ;
								break;
							case "Up-Size":
								$price =  $price +(5 + 15) * $_qty;
								break;
							case "Jumbo":
								$price =  $price +(10 + 15 ) * $_qty;
								break;
						}
						if (($_qty <= 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] . " piece of Regular Pepsi amounting to &#x20B1;" .  15 * $_qty."</li>";
							echo"</ul>";
							
						}
						elseif(($_qty > 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Regular Pepsi amounting to &#x20B1;" . 15 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." piece of Up-Size Pepsi amounting to &#x20B1;" . 20 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Up-Size Pepsi amounting to &#x20B1;" . 20 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." piece of Jumbo Pepsi amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>".  $_GET["txtNumber"] ." pieces of Jumbo Pepsi amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}

					}
					if($_drinks[$i] ==5){
						switch ($size) {
							case 'Regular':
								$price =  $price + 20 * $_qty ;
								break;
							case "Up-Size":
								$price = $price + (5 +  20) * $_qty;
								break;
							case "Jumbo":
								$price = $price + ( 10 +  20) * $_qty;
								break;
						}

						if (($_qty <= 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>".$_GET["txtNumber"] . " piece of Regular Mountain Dew amounting to &#x20B1;" .  20 * $_qty."</li>";
							echo"</ul>";		
						}
						elseif(($_qty > 1) && ($size == "Regular")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] ." pieces of Regular Mountain Dew amounting to &#x20B1;" . 20 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] ." piece of Up-Size Mountain Dew amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Up-Size")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] ." pieces of Up-Size Mountain Dew amounting to &#x20B1;" . 25 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty <= 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] ." piece of Jumbo Mountain Dew amounting to &#x20B1;" . 30 * $_qty."</li>";
							echo"</ul>";
						}
						elseif(($_qty > 1) && ($size == "Jumbo")){
							echo"<ul>";
								echo"<li>". $_GET["txtNumber"] ." pieces of Jumbo Mountain Dew amounting to &#x20B1;" . 30 * $_qty."</li>";
							echo"</ul>";
						}
					}
					}	
				echo "<b>Number of items : </b>" .$c * $_GET["txtNumber"]."<br>";
				echo "<b>Total Amount : </b>" .$price;
			}
	
		elseif(isset($_GET["btnProcess"]))
			if (!empty($_GET["choice"])) {
			echo"";
		}
		else
			echo"<hr>No selected products please try again!";
	

 ?>

</html>