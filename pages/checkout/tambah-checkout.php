<?php

include('../../config/koneksi.php');

if ($_POST) {
    $id_user = $_POST['id_user'];
    $item = $_POST['item'];
    $qty = $_POST['qty'];
    $deskripsi = $_POST['deskripsi'];
    $subtotal = $_POST['subtotal'];
    $tanggal = $_POST['tanggal'];
    $gambar = $_FILES['bukti']['name'];

    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['bukti']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../../pages/checkout/bukti/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
            $sql = "SELECT * FROM cart,item WHERE cart.id_item=item.id_item AND id_user='$id_user'";
            $qy = mysqli_query($koneksi, $sql);
            foreach ($qy as $dt) {
                $query = "INSERT INTO checkout(id_checkout,id_user,item,qty,subtotal,deskripsi,bukti,tanggal,status) VALUES('','$id_user','$dt[nama]','$dt[qty]','$dt[subtotal]','$deskripsi','$nama_gambar_baru','$tanggal','belum')" . ';';
                $result = mysqli_query($koneksi, $query);
            }
            // echo $query;
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($connection) .
                    " - " . mysqli_error($connection));
            } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                echo "<script>alert('Berhasil checkout!');window.location='../../index.php';</script>";
                $query = ("DELETE FROM cart where id_user='$id_user'");
                mysqli_query($koneksi, $query);
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../../index.php';</script>";
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
