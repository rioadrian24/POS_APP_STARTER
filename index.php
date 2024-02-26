<?php

include "db.php";
include "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POINT OF SALE</title>

    <!-- Icons -->
    <link rel="stylesheet" href="assets/icons/font/bootstrap-icons.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg  mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-2" href="index.php?page=home">POS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="index.php?page=product">Products</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="index.php?page=order">Orders</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link text-danger">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php

    $page = isset($_GET['page']) ? $_GET['page'] : '';

    switch ($page) {
            // home
        case 'home':
            include "pages/home/index.php";
            break;
            // products
        case 'product':
            include "pages/product/index.php";
            break;
        case 'add_product':
            include "pages/product/add.php";
            break;
        case 'edit_product':
            include "pages/product/edit.php";
            break;
            // orders
        case 'order':
            include "pages/order/index.php";
            break;
        case 'detail_order':
            include "pages/order/detail.php";
            break;
            // auth
        default:
            include "pages/auth/login.php";
            break;
    }

    ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>