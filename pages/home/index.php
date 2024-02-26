<div class="container pb-5">
    <div class="row">
        <div class="col-lg-8 order-lg-0 order-1">
            <div class="row mb-4">
                <div class="col-lg-6">
                    <h2 class="text-primary">Resto with Smart POS</h2>
                    <h3 class="lead text-muted"><?= date('d F Y') ?></h3>
                </div>
                <div class="col-lg-6">
                    <form action="" method="GET">
                        <input type="hidden" name="page" value="home">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-white">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control" name="q" placeholder="Search for food, coffe, etc.." value="">
                        </div>
                    </form>
                </div>
            </div>

            <?= show_message() ?>

            <div class="row g-4">
                <?php for ($i = 0; $i <= 5; $i++) : ?>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="card">
                            <img src="https://hokben-images.s3.ap-southeast-3.amazonaws.com/menu/cc8c22888510f1205b3feebaab2b4618-1703643829982" class="card-img-top object-fit-cover" alt="..." style="height: 181.44px;">
                            <div class="card-body">
                                <h6 class="card-title" style="height: 38.38px;">WAFU SHOYU RAMEN</h6>
                                <div class="row align-items-center g-0">
                                    <div class="col-lg-6">
                                        <p class="card-text text-muted">Rp. 45.000</p>
                                    </div>
                                    <div class="col-lg-6 text-end">
                                        <a href="" class="btn btn-primary">
                                            <i class="bi bi-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 order-0 mb-3 position-relative">
            <form method="POST">
                <h4 class="text-primary mb-3">Orders #1</h4>

                <div class="mb-3">
                    <input type="radio" class="btn-check" name="type" value="Dine In" id="btn-dine-in" checked autocomplete="off">
                    <label class="btn btn-outline-primary px-4 me-2" for="btn-dine-in">Dine In</label>

                    <input type="radio" class="btn-check" name="type" value="To Go" id="btn-to-go" autocomplete="off">
                    <label class="btn btn-outline-primary px-4" for="btn-to-go">To Go</label>
                </div>

                <table class="table table-borderless mb-3">
                    <tr class="border-bottom border-primary small">
                        <th class="w-100">Item</th>
                        <th>Qty</th>
                        <th>Price</th>
                    </tr>
                    <tr class="small">
                        <td>
                            <div>WAFU SHOYU RAMEN</div>
                            <div>
                                <a href="" class="small text-danger text-decoration-none"><i class="bi bi-trash3"></i> Remove</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <a href="" class="btn-minus">
                                        <i class="bi bi-dash"></i>
                                    </a>
                                </div>
                                <div>1</div>
                                <div>
                                    <a href="" class="btn-plus">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td class="text-nowrap">Rp. 45.000</td>
                    </tr>
                </table>

                <div class="position-sticky bg-white" style="bottom: 1rem;">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="customer_name" placeholder="Nama Customer" required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="total_payment" placeholder="Jumlah Bayar" required autocomplete="off">
                            </div>

                            <table class="table table-borderless mb-3 table-sm small">
                                <tr>
                                    <th class="text-nowrap text-muted fw-light">PPN (11%)</th>
                                    <td class="text-primary text-end">Rp. 0</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap text-muted fw-light">Sub total</th>
                                    <td class="text-primary text-end">Rp. 0</td>
                                </tr>
                            </table>

                            <button type="submit" class="btn btn-primary w-100" name="order">Confirm Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>