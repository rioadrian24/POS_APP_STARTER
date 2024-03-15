<?php
$products = $conn->query("SELECT * FROM products");
?>

<div class="container">
    <div class="row mb-5">
        <div class="col">

            <a href="index.php?page=add_product" class="btn btn-primary mb-3">Tambah Produk</a>

            <?= show_message() ?>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td><?= $product['name'] ?></td>
                                    <td>Rp. <?= number_format($product['price'], 0, '.', '.') ?></td>
                                    <td><?= $product['stock'] ?></td>
                                    <td>
                                        <a href="index.php?page=edit_product&id_product=<?= $product['id_product'] ?>" class="btn btn-primary btn-sm me-1"><i class="bi bi-pencil-square"></i></a>
                                        <a href="index.php?page=delete_product&id_product=<?= $product['id_product'] ?>" class="btn btn-danger btn-sm" onclick="confirm('Are you sure delete this item?')"><i class="bi bi-trash3"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>