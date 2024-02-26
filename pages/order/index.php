<?php

$orders = $conn->query("SELECT * FROM orders JOIN users ON orders.id_user=users.id_user ORDER BY id_order DESC");

?>

<div class="container">
    <div class="row mb-5">
        <div class="col">

            <a href="index.php?page=home" class="btn btn-primary mb-3">Create Order</a>

            <?= show_message() ?>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tr>
                                <th>No. Order</th>
                                <th>Kasir</th>
                                <th>Customer</th>
                                <th>Type</th>
                                <th>Total</th>
                                <th>Total Payment</th>
                                <th>Change</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                                <tr>
                                    <td>302960</td>
                                    <td>Admin</td>
                                    <td>Stephen</td>
                                    <td>Dine In</td>
                                    <td>Rp. 159.840</td>
                                    <td>Rp. 160.000</td>
                                    <td>Rp. 160</td>
                                    <td>2024-02-26 11:01:41</td>
                                    <td>
                                        <a href="index.php?page=detail_order" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>