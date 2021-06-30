<!DOCTYPE html>
<html>
<head>
	<title>Multiple Checkbox</title>
	</head>
<body>
<div class="container">
	<h4>Multiple Checkbox</h4>
<hr>
<form method="post" action="checkbox-db.php">
<table class="table table-bordered">
	<thead>
		<tr>
			<th></th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Car"></td>
			<td>Car
				<input type="hidden" name="prodname[]" value="Car">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control"></td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Bike"></td>
			<td>Bike
				<input type="hidden" name="prodname[]" value="Bike">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control"></td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Accessories"></td>
			<td>Accessories
				<input type="hidden" name="prodname[]" value="Accessories">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control"></td>
			<td><input type="number" name="prod_qty[]" class="form-control"></td>
		</tr>
	</tbody>
</table>
<div class="text-center">
	<input type="submit" name="submit" class="btn btn-success" value="Submit">
	</div>
</div>
</form>
</body>
</html>
