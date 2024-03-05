<?php

$id_product = $_GET['id_product'];

$product = $conn->query("SELECT * FROM products WHERE id_product = '$id_product'")->fetch_assoc();

?>

<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <h5 class="mb-3">Edit Product</h5>
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $product['name'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="<?= $product['price'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" value="<?= $product['stock'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">

                            <div class="mt-3">
                                <img src="assets/img/product/<?= $product['image'] ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="edit">Edit Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>