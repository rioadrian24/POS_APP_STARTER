<?php

if (isset($_POST['add'])) {
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_FILES['image']['name'];
    $tmp   = $_FILES['image']['tmp_name'];

    $path = 'assets/img/product/' . $image;

    if (move_uploaded_file($tmp, $path)) {
        $sql = "INSERT INTO products (name, price, stock, image)
        VALUES ('$name', '$price', '$stock', '$image')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            set_message('success', 'Product added successfully');
        } else {
            set_message('danger', 'Failed to add product');
        }
        header("Location: index.php?page=product");
    }
}

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h5 class="mb-3">Add New Product</h5>
            <div class="card">
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary" name="add">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>