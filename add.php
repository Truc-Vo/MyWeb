<?php
	include ('productCRUD.php');
	
	if(isset($_POST['add'])) {
		$obj = new ProductCRUD();
		$success = $obj->createProduct($_POST['code'],$_POST['name'],$_POST['price'],$_POST['image'],$_POST['deitals']);
		header('Location: index.php');
	}

?>


<?php require_once __DIR__. "/admin/layouts/header.php"; ?>

                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add New Product<a href="insert.php"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Products</a></li>
							<li class="breadcrumb-item active"> <i class="fa fa-file"></i> Add new </li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
								<h2>Add new a toy</h2>
								<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
									<div class="from-group">
										<label for="code">Product code:</label>
										<input type="text" class="form-control" id="code" placeholder="Enter code" name="code" ">
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
									
									<button type="submit" class="btn btn-primary" name="add" >Add new</button>
								</form>
                            </div>
                        </div>
                        <div style="height: 100vh;"></div>
                        <div class="card mb-4"><div class="card-body"></div></div>
                    </div>
                </main>


<?php require_once __DIR__. "/admin/layouts/footer.php"; ?>


