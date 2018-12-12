<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<?php
        
                $conn = mysqli_connect("localhost","root","","pizzacentral");
                if(!$conn){
                        die('Not connected to Database'.mysqli_connect_error());
                }else{

                        $price = mysqli_query($conn,"SELECT * FROM price_list LEFT JOIN product_profile product_profile.prod_id = price_list.prod_id");
                        if(mysqli_num_rows($price) > 0){
                        
                        while($row = mysqli_fetch_array($price)){
                               
                        ?>
		<form>
			<table>
				<tr>
					<td>ID</td><td>Name</td><td>Address</td><td>Status</td>
				</tr>
				<tr>
					
				</tr>
			</table>
		</form>
		<form class="add_prod">
			<input type="text" name="fran_name" placeholder="Pizzeria Name">
			<input type="text" name="prod_name" placeholder="Product Name">
			<input type="text" name="prod_desc" placeholder="Description">
			<input type="text" name="prod_price" placeholder="Price">
			<input type="radio" name="prod_type" value="pizza">
			<input type="radio" name="prod_type" value="pasta">
			<input type="radio" name="prod_type" value="salad">
			<input type="radio" name="prod_type" value="dessert">
		</form>
		<form class="add_branch">
			<input type="text" name="fran_name" placeholder="Pizzeria Name">
			<input type="text" name="username" placeholder="Username">
			<input type="text" name="password" placeholder="Password">
			<input type="text" name="cpass" placeholder="Confirm Password">
			<input type="text" name="address" placeholder="Address">
		</form>
		<form class="add_franchise">
			<input type="text" name="username" placeholder="Username">
			<input type="text" name="password" placeholder="Password">
			<input type="text" name="cpass" placeholder="Confirm Password">
		</form>
</body>
</html>