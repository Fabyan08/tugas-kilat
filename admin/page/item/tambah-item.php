<?php

include('../../conf/koneksi.php');

if ($_POST) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = str_replace(",", "", $_POST['harga']);
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
            $query = "INSERT INTO item(id_item,nama,deskripsi,harga,gambar) VALUES('','$nama','$deskripsi','$harga','$nama_gambar_baru')";
            // echo $query;
            $result = mysqli_query($koneksi, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($connection) .
                    " - " . mysqli_error($connection));
            } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                echo "<script>alert('Berhasil ditambahkan!');window.location='../../index.php?page=item';</script>";
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../../index.php?page=item';</script>";
        }
    } else {

        $query = "INSERT INTO item(id_item,nama,deskripsi,harga,gambar) VALUES('','$nama','$deskripsi','$harga',null)";
        $result = mysqli_query($koneksi, $query);

        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($connection) .
                " - " . mysqli_error($connection));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Berhasil!');window.location='../../index.php?page=item';</script>";
        }
    }
}


// $sql = "INSERT INTO pengeluaran(id_pengeluaran,nama,jumlah,deskripsi,tanggal,id_pv) VALUES('','$nama','$jumlah','$deskripsi','$tanggal','$id_pv')";

// $query = mysqli_query($koneksi, $sql);
// if ($query) {
//     echo "<script>alert('Data berhasil Disimpan.');window.location='../../../index.php?page=pengeluaran';</script>";
// } else {
//     echo "<script>alert('Data gagal disimpan.');window.location='../../../index.php?page=pengeluaran';</script>";
// }
