<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Peyys App</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="margin">
			<form action="" method="post">
				<h1><center>Peys App</center></h1><br>
				<label for="imgSize">Select Photo Size :</label>
				<div class="slider">
					<input type="range" name="imgSize" id="imgSize" value="60" min="0" max="100" step="10" oninput="rangeValue.innerText = this.value">
					<p id="rangeValue">60</p>
				</div>
				<label for="clrBorder">Select Border Color :</label>
				<input type="Color" name="clrBorder" id="clrBorder" value="black"><br>
				<input type="submit" name="btnProcess" value="Process" class="btn">

				<hr>
				<?php
				if (isset($_POST['btnProcess'])) {

					$imgSize = 60;
					$imgSize = $_POST['imgSize'];
					$borderColor = $_POST['clrBorder'];
					
				}

				?>
				<img src="img/pic.png" style="width:<?php echo $imgSize.'%';?>; border-color: <?php echo $borderColor; ?>;border-width: 5px; border-style: solid;">
				</div>
			</form>
		</div>
	</div>
	
</body>
</html>