<?php
if ($_SESSION['level'] == 'admin') { ?>
    <script>
        window.location = 'index.php';
    </script>
<?php } else {
    include('config/koneksi.php');
    $sql = "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
}
?>
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="?page=checkout">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="checkout_area section_gap">
    <div class="container">

        <h4>Pilih Salah Satu Pembayaran Berikut:</h4>
        <div class="row" style="margin-left: -30px;">
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold" for="">1234 5678 8202 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png" width="230" alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold" for="">1234 5678 8202 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png" width="180" alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold" for="">1234 5678 8202 1060</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <small><span class="fw-bold">Name:</span><span>Kumar</span></small>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Detail Pembayaran</h3>
                    <form class="row contact_form">
                        <div class="col-md-6 form-group">
                            <p>Nama</p>
                            <input type="text" readonly value="<?= $data['nama']; ?>" class="form-control" id="first" name="nama">
                            <span class="placeholder"></span>
                        </div>
                        <div class="col-md-6 form-group">
                            <p>No HP</p>
                            <input type="number" readonly value="<?= $data['no']; ?>" class="form-control" id="last" name="no">
                        </div>
                    </form>

                    <form class="row contact_form" method="POST" action="pages/checkout/tambah-checkout.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="id_user" value="<?= $_SESSION['id_user']; ?>" hidden>
                        <input type="text" value="<?= date('Y-m-d'); ?>" name="tanggal" hidden>

                        <div class="col-md-12 form-group">
                            <?php
                            $sql = "SELECT * FROM cart,item WHERE cart.id_item=item.id_item AND id_user='$_SESSION[id_user]'";
                            $query = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($query)) { ?>
                                <input type="text" hidden readonly class="form-control" name="item" id="message" rows="1" value="<?= $data['nama']; ?>">
                                <input type="text" hidden readonly class="form-control" name="qty" id="message" rows="1" value="<?= $data['qty']; ?>">
                                <input type="text" hidden readonly class="form-control" name="subtotal" id="message" rows="1" value="<?= $data['subtotal']; ?>">
                                <!-- echo $item = $data['nama'] . ',';
                                echo $qty = $data['qty'] . ',';
                                echo $subtotal = $data['subtotal'] . ' & '; -->
                            <?php } ?>
                        </div>
                        <?php
                        $sql = "SELECT SUM(item.harga) as total FROM cart,item WHERE cart.id_item=item.id_item AND id_user='$_SESSION[id_user]'";
                        $query = mysqli_query($koneksi, $sql);
                        $data = mysqli_fetch_array($query);
                        ?>
                        <div class="col-md-12 form-group">
                            <p>Deskripsi</p>
                            <textarea required class="form-control" name="deskripsi" id="message" rows="1" placeholder="Buatlah deskripsi sejelas-jelasnya untuk semua item, jangan khawatir kamu akan dihubungi selanjutnya untuk informasi lebih lengkap!"></textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <p>Bukti Pembayaran</p>
                            <input type="file" required id="last" name="bukti">
                        </div>
                        <button name="submit" style="border: none; margin-left: 15px;" type="submit" class="primary-btn">Buat Pesanan</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a href="#">Item <span>Total</span></a></li>
                            <?php
                            $sql = "SELECT * FROM cart,item WHERE cart.id_item=item.id_item AND id_user='$_SESSION[id_user]'";
                            $query = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <li><a href="#"><?= $data['nama']; ?> <span class="middle">x<?= $data['qty']; ?></span> <span class="last">Rp<?= number_format($data['subtotal'], 0, ',', '.'); ?></span></a></li>
                            <?php } ?>
                        </ul>
                        <ul class="list list_2">
                            <?php
                            $sql = "SELECT SUM(cart.subtotal) as subtotal FROM cart,item WHERE cart.id_item=item.id_item AND id_user='$_SESSION[id_user]'";
                            $query = mysqli_query($koneksi, $sql);
                            $data = mysqli_fetch_array($query);
                            ?>
                            <li><a href="#">Total <span>Rp<?= number_format($data['subtotal'], 0, ',', '.'); ?></span></a></li>
                        </ul>
                        <!-- <a class="primary-btn" href="#">Buat Pesanan</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>