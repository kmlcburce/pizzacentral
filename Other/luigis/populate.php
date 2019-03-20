<?php
	//What this entire form does is populate the price_list and product_profile table all at one instance
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		 $conn = mysqli_connect("localhost","root","","pizzacentral");
		if(!$conn){
			die('Not connected to Database');
		}else{
			$query = "INSERT INTO product_profile (prod_name, prod_type, prod_descr, img_addr) VALUES ('{$_POST['prod_name']}','{$_POST['prod_type']}','{$_POST['prod_descr']}','{$_POST['img_addr']}')";
			$res = mysqli_query($conn,$query);
			if ($res==TRUE) {
				echo "Succesfully inserted (1)";
			}else{
				echo "Insertion failed (1)";
			}
			$prod_id = mysqli_insert_id($conn);
			$query2 = "INSERT INTO price_list (prod_id, prod_name, price_sizeS, price_sizeM, price_sizeL) VALUES ({$prod_id},'{$_POST['prod_name']}', '{$_POST['price_sizeS']}','{$_POST['price_sizeM']}','{$_POST['price_sizeL']}')";
			$res2 = mysqli_query($conn,$query2);

			if ($res2==TRUE) {
				echo "Succesfully inserted (2)";
			}else{
				echo "Insertion failed (2)";
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

					<textarea name="prod_descr" rows="3" cols="30" placeholder="Description"></textarea><br><br>
					<input type="text" name="img_addr" placeholder="Image Address"><br><br>
					<input type="int" name="price_sizeS" placeholder="size S"><br><br>
					
					<input type="int" name="price_sizeM" placeholder="size M"><br><br>
					
					<input type="int" name="price_sizeL" placeholder="size L"><br><br>
					
					<input type="submit" name="Submit" value="Populate"><br><br>
				</form>
			</div>

		</body>

		</html>
		<?php
	}

	
?>