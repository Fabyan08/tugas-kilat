<?php
include('../../config/koneksi.php');
$id_cart = $_GET['id_cart'];
$query = ("DELETE FROM cart where id_keranjang='$id_cart'");
if (!mysqli_query($koneksi, "$query")) {
    die(mysqli_error($koneksi));
} else {
    echo '<script>alert("Berhasil Dihapus");
window.location.href="../../home.php?page=cart"</script>';
}
