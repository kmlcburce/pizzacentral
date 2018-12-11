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
</body>
</html>