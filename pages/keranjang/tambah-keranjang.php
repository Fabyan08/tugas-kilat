<?php
include('../../config/koneksi.php');
if ($_POST) {
    $id_user = $_POST['id_user'];
    $id_item = $_POST['id_item'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO cart(id_keranjang,id_user,id_item,qty,subtotal) VALUES('','$id_user','$id_item','$qty','$harga')";


    if ((!mysqli_query($koneksi, "$sql"))) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Berhasil!");
        window.location.href="../../index.php"</script>';
    }
}
