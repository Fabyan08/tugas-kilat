<?php
include('../../config/koneksi.php');
if ($_POST) {

    $id_keranjang = $_POST['id_keranjang'];
    $qty = $_POST['qty'];
    $subtotal = $qty * $_POST['subtotal'];

    $sql = "UPDATE cart set qty='$qty',subtotal='$subtotal' WHERE id_keranjang='$id_keranjang'";

    if ((!mysqli_query($koneksi, "$sql"))) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>window.location.href="../../home.php?page=cart"</script>';
    }
}
