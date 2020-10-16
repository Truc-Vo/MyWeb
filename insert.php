<?php
	include ('productCRUD.php');
	
	if(isset($_POST['add'])) {
		$obj = new ProductCRUD();
		$success = $obj->createProduct($_POST['code'],$_POST['name'],$_POST['price'],$_POST['image'],$_POST['deitals']);
		header('Location: index.php');
	}

?>