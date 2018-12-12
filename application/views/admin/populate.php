<?php
	//What this entire form does is populate the price_list and product_profile table all at one instance
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		 $conn = mysqli_connect("localhost","root","","pizzacentral");
		if(!$conn){
			die('Not connected to Database');
		}else{
			$query = "INSERT INTO product_profile (prod_name, prod_type, prod_desc, prod_imgurl) VALUES ('{$_POST['prod_name']}','{$_POST['prod_type']}','{$_POST['prod_desc']}','{$_POST['prod_imgurl']}','{$_POST['prod_price']}')";
			$res = mysqli_query($conn,$query);
			if ($res==TRUE) {
				echo "Succesfully inserted (1)";
			}else{
				echo "Insertion failed (1)";
			}

		}
	}else{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Populate</title>
		</head>
		<body>
			<?php
			if(isset($_GET['error'])){
				echo "<script>alert('Sorry, something went wrong...');</script>";
			}
			?>
			<div style="padding-top: 10%;padding-left: 35%;">
				<form action="populate.php" method="POST">
					<input type="text" name="prod_name" placeholder="Product Name"><br><br>
					<input type="radio" name="prod_type" value="pizza"><p>Pizza</p>
					<input type="radio" name="prod_type" value="pasta"><p>Pasta</p>
					<input type="radio" name="prod_type" value="salad"><p>Salad</p>
					<input type="radio" name="prod_type" value="dessert"><p>Dessert</p>
					<input type="radio" name="prod_type" value="drinks"><p>Drinks</p>

					<textarea name="prod_desc" rows="3" cols="30" placeholder="Description"></textarea><br><br>
					<input type="text" name="prod_imgurl" placeholder="Image Address"><br><br>
					<input type="text" name="prod_price" placeholder="price"><br><br>
					<input type="submit" name="Submit" value="Populate"><br><br>
				</form>
			</div>

		</body>

		</html>
		<?php
	}

	
?>