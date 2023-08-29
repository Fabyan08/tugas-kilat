<?php
include('../../../config/koneksi.php');
$id_item = $_POST['id_item'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];


if (isset($_POST['submit'])) {
    $gambar = $_FILES['gambar']['name'];

    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../../page/item/img/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
            // jalankan query UPDATE berdasarkan ID yang produknya kita edit
            $query = "UPDATE item SET gambar = '$nama_gambar_baru', nama='$nama',deskripsi='$deskripsi',harga='$harga' WHERE id_item='$id_item'";
            $result = mysqli_query($koneksi, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                echo "<script>alert('Berhasil diubah.');window.location='../../index.php?page=item';</script>";
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar hanya boleh JPG atau PNG.');window.location='../../index.php?page=item';</script>";
        }
    } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query = "UPDATE item SET gambar = '$nama_gambar_baru', nama='$nama',deskripsi='$deskripsi',harga='$harga'";
        $query .= "WHERE id_item = '$id_item'";
        $result = mysqli_query($koneksi, $query);
        // periksa query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil diubah.');window.location='../../index.php?page=item';</script>";
        }
    }
}

    // $sql = "UPDATE user SET nama='$nama', sistem_penggajian='$sistem_penggajian',no_handphone='$no_hp', no_rekening='$no_rekening', password= '$level' WHERE id_user='$id_user'";
    // $query = mysqli_query($koneksi, $sql);
    // if ($query) {
    //     echo "<script>alert('Data berhasil diubah.');window.location='../../index.php?page=profil';</script>";
    // } else {
    //     echo "<script>alert('Maaf data Tidak Tersimpan'); window.location.assign('?page=karyawan');</script>";
    // }