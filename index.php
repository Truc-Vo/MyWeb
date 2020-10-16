<?php
include ('productCRUD.php');
$obj = new productCRUD();
$list = $obj->readProducts();
if($list){
	/*
  foreach($list as $item){
  $content = "";
  foreach($item as $key => $value){
    $content = $content.$key.": ".$value."<br>";
  }
  echo $content."<br>";
}
}*/
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>Add new a toy</h2>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<div class="form-group">
					<label for="code">Product code:</label>
					<input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
				</div>
			
				<div class="form-group">
					<label for="name">Product name:</label>
					<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
				</div>
				
				<div class="form-group">
					<label for="price">Product price:</label>
					<input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
				</div>
				
				<div class="form-group">
					<label for="image">Product image:</label>
					<input type="text" class="form-control" id="image" placeholder="Enter image" name="image">
				</div>
			
				<div class="form-group">
					<label for="details">Product details:</label>
					<input type="text" class="form-control" id="details" placeholder="Enter details" name="details">
				</div>
				
				<button type="submit" class="btn btn-primary" name="add">Add new</button>
			</form>
		
		<div class="container">
			<table class="table table-dark table-hover">
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Image</th>
					<th>Product Details</th>
					<th>Actions</th>
					</tr>
					<?php foreach($list as $item) {?>
					<tr>
					<td><?php echo $item["code"] ?> </td>
						<td><?php echo $item["name"] ?> </td>
						<td><?php echo $item["price"] ?> </td>
					<td><img src="img\<?php echo $item["image"] ?>"/> </td>
						<td><?php echo $item["details"] ?> </td>
						<td><a href="#">Edit</a> &nbsp; | &nbsp;<a href="#">Delete</a> </td>
					</tr>
					<?php } ?>
					<?php } ?>
			</table>
		</div>
	</body>
	
</html>
