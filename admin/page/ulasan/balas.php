<?php
include('../../conf/koneksi.php');
if ($_POST) {
    $id_ulasan = $_POST['id_ulasan'];
    $balas = $_POST['balas'];


    $sql = "UPDATE ulasan set balasan='$balas' WHERE id_ulasan = '$id_ulasan'";


    if ((!mysqli_query($koneksi, "$sql"))) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Berhasil Membalas Ulasan");
        window.location.href="../../?page=ulasan"</script>';
    }
}
