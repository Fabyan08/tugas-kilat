<?php
include('../../config/koneksi.php');
if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no = $_POST['no'];
    $pesan = $_POST['pesan'];


    $sql = "INSERT INTO ulasan(id_ulasan,nama,email,no,pesan) VALUES('','$nama','$email','$no','$pesan')";


    if ((!mysqli_query($koneksi, "$sql"))) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Berhasil Mengirimkan Ulasan");
        window.location.href="../../home.php?page=ulasan"</script>';
    }
}
