<style>
    @media print {
        .navbar {
            display: none;
        }
    }
</style>

<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 70vh;">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="text-center text-muted">Order Details #302960</h6>

                    <h6>Items</h6>
                    <table class="table table-sm small">
                        <?php for ($i = 0; $i <= 2; $i++) : ?>
                            <tr>
                                <td>WAFU SHOYU RAMEN</td>
                                <td class="text-end">1x</td>
                                <td class="text-end text-nowrap">Rp. 45.000</td>
                            </tr>
                        <?php endfor; ?>
                    </table>

                    <table class="table table-borderless table-sm small">
                        <tr>
                            <th>Kasir</th>
                            <td class="text-end">Admin</td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td class="text-end">Stephen</td>
                        </tr>
                        <tr>
                            <th>Order Type</th>
                            <td class="text-end">Dine In</td>
                        </tr>
                        <tr>
                            <th>PPN</th>
                            <td class="text-end">11%</td>
                        </tr>
                        <tr>
                            <th>Sub Total</th>
                            <td class="text-end">Rp. 159.840</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td class="text-end">2024-02-26 11:01:41</td>
                        </tr>
                    </table>

                    <h6 class="text-center">Thanks for order :)</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.print()
</script>