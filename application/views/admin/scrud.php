<div class="table-responsive">
	<?php
        
                $conn = mysqli_connect("localhost","root","","pizzacentral");
                if(!$conn){
                        die('Not connected to Database'.mysqli_connect_error());
                }else{

                        $price = mysqli_query($conn,"SELECT * FROM price_list LEFT JOIN product_profile product_profile.prod_id = price_list.prod_id");
                        if(mysqli_num_rows($price) > 0){
                        
                        while($row = mysqli_fetch_array($price)){
                               
                        ?>
		<form >
		ID:
			<table class="table table-striped table-sm">
				<tr>
					<td>Name</td><td>Qty</td><td>Price</td><td>Sub-Total</td>
				</tr>
				<tr>
					
				</tr>
				<tr>
					<td colspan="3">Total:</td><td></td>
				</tr>
			</table>
		</form>
</body>
</html>