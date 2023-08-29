<?php
include('../config/koneksi.php');
if ($_POST) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no'];
    $password = $_POST['password'];
    $profil = "user.png";
    $level = "user";

    $sql = "INSERT INTO user(id_user,nama,no,email,alamat,password,profil,level) VALUES('','$nama','$no','$email','$alamat','$password','$profil','$level')";


    if ((!mysqli_query($koneksi, "$sql"))) {
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Berhasil Registrasi, Silahkan Login");
        window.location.href="../index.php"</script>';
    }
}
