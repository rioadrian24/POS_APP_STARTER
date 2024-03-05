<?php

$id_product = $_GET['id_product'];

$conn->query("DELETE FROM products WHERE id_product = '$id_product'");

set_message('success', 'Produk berhasil dihapus');
header('location: index.php?page=product');