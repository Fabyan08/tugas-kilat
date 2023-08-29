<?php

include('../../conf/koneksi.php');
$id_checkout = $_POST['id_checkout'];
$status = $_POST['status'];


$sql = "UPDATE checkout SET status = '$status' WHERE id_checkout='$id_checkout'";

$query = mysqli_query($koneksi, $sql);
if ($query) {
    echo "<script>alert('Berhasil.');window.location='../../?page=checkout';</script>";
} else {
    echo "<script>alert('Gagal.');window.location='../../?page=checkout';</script>";
    // echo "<script>alert(Gagal'); window.locatin.assign('?url=spp');</script>";
}
