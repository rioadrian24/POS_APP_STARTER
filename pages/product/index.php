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
                            <tr>
                                <td>WAFU SHOYU RAMEN</td>
                                <td>Rp. 45.000</td>
                                <td>100</td>
                                <td>
                                    <a href="index.php?page=edit_product" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="btn btn-danger btn-sm" onclick="confirm('Are you sure delete this item?')"><i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>