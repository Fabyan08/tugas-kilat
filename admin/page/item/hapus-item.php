<?php
include('../../conf/koneksi.php');
$id_item = $_GET['id_item'];
$query = ("DELETE FROM item where id_item='$id_item'");
if (!mysqli_query($koneksi, "$query")) {
    die(mysqli_error($koneksi));
} else {
    echo '<script>alert("Data Berhasil Dihapus");
window.location.href="../../index.php?page=item"</script>';
}
