
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
<?php require_once __DIR__. "/admin/layouts/header.php"; ?>

                <main>

                    <div class="container-fluid">
                        <h1 class="mt-4">Product List <a href="insert.php"><a href="add.php" class="btn btn-primary"> Add new</a></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Products</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
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
                                            <td><?php echo $item["price"]?> </td>
                                        <td><img src="img\<?php echo $item["image"]?>"style="width:200px"/> </td>
                                            <td><?php echo $item["details"] ?> </td>
                                            <td>
                                               <a href="delete.php?code=<?= $item["code"]?>" onclick="return confirm('Are you sure you want to delete this item?');"> <button type="delete" class="btn btn-primary" name="delete" >Delete</button></a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php } ?>
                                </table>
                            </div>
                        </div>
                        <div style="height: 100vh;"></div>
                        <div class="card mb-4"><div class="card-body"></div></div>
                    </div>
                </main>


<?php require_once __DIR__. "/admin/layouts/footer.php"; ?>