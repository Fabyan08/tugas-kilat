<?php
include('../../conf/koneksi.php');
$id_user = $_GET['id_user'];
$query = ("DELETE FROM user where id_user='$id_user'");
if (!mysqli_query($koneksi, "$query")) {
    die(mysqli_error($koneksi));
} else {
    echo '<script>alert("Data Berhasil Dihapus");
window.location.href="../../index.php?page=user"</script>';
}
