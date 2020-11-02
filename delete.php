<?php
	include ('productCRUD.php');
		$obj = new productCRUD();
		$success = $obj->deleteproduct($_GET['code']);
		header('Location: index.php');
?>