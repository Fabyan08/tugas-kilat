<?php
if ($_SESSION['level'] == 'admin') { ?>
    <script>
        window.location = 'index.php';
    </script>
<?php } else {
    include('config/koneksi.php');
    $sql = "SELECT * FROM cart,item WHERE cart.id_item=item.id_item AND id_user='$_SESSION[id_user]'";
    $query = mysqli_query($koneksi, $sql);
}
?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shopping Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="?page=cart">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Hapus</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="admin/page/item/img/<?= $data['gambar']; ?>" width="70" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?= $data['nama']; ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></h5>
                                </td>
                                <form action="pages/keranjang/tambah-qty.php" method="POST">
                                    <td>
                                        <div class="product_count">
                                            <input type="text" value="<?= $data['id_keranjang']; ?>" hidden name="id_keranjang" id="">
                                            <input type="text" hidden value="<?= $data['harga']; ?>" name="subtotal" id="">
                                            <input type="number" name="qty" id="sst" maxlength="12" value="<?= $data['qty']; ?>" title="Quantity:" class="input-text qty">
                                        </div>
                                    </td>
                                    <td>
                                        <?php
                                        $subtotal = $data['harga'] * $data['qty'];
                                        ?>
                                        <h5>Rp<?= number_format($data['subtotal'], 0, ',', '.'); ?></h5>
                                    </td>
                                    <td>
                                        <a href="pages/keranjang/hapus-cart.php?id_cart=<?= $data['id_keranjang']; ?>" class="genric-btn btn-danger">Hapus</a>
                                    </td>
                                    <td>
                                        <button type="submit" name="submit" class="gray_btn">Update</button>
                                    </td>
                                </form>
                            </tr>
                        <?php } ?>
                        <tr class="bottom_button">

                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>

                            <td></td>
                            <td></td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Total</h5>
                            </td>
                            <td>
                                <?php
                                $sql = "SELECT SUM(cart.subtotal) as subtotal FROM cart,item WHERE cart.id_item=item.id_item AND id_user='$_SESSION[id_user]'";
                                $query = mysqli_query($koneksi, $sql);
                                $data = mysqli_fetch_array($query);
                                ?>
                                <h5>Rp<?= number_format($data['subtotal'], 0, ',', '.'); ?></h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td></td>
                            <td></td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="index.php">Tambah Item</a>
                                    <a class="primary-btn" href="?page=checkout">Proceed to checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>