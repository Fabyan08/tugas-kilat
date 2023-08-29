<?php
include('conf/koneksi.php');
$sql = "SELECT * FROM user,checkout WHERE checkout.id_user='$_GET[id_user]' AND checkout.id_checkout='$_GET[id_checkout]'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Checkout</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Data</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td><?= $data['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>No HP</td>
                                        <td><?= $data['no']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Item</td>
                                        <td><?= $data['item']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td><?= $data['deskripsi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td><?= $data['qty']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>Rp<?= number_format($data['subtotal'], 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hubungi WhatsApp</td>
                                        <td><a href="https://wa.me/<?= $data['no']; ?>" target="_blank" class="btn btn-success btn-icon-text">
                                                <i class="ti-mobile btn-icon-prepend"></i></td>
                                    </tr>
                                    </a>Status:
                                    <?php
                                    if ($data['status'] == 'belum') { ?>
                                        <label class="badge badge-danger">Belum</label>

                                    <?php } else { ?>
                                        <label class="badge badge-success">Selesai</label>
                                    <?php }  ?>
                                    <form action="page/checkout/edit-status.php" method="POST">
                                        <input type="text" value="<?= $data['id_checkout']; ?>" hidden name="id_checkout">
                                        <select class="form-control" name="status" id="exampleFormControlSelect2">
                                            <option value="selesai">Selesai</option>
                                            <option value="belum">Belum</option>
                                        </select>
                                        <button type="submit" class="btn btn-small btn-primary">Update</button>
                                    </form>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Bukti Pembayaran</h4>
                        <div class="table-responsive">
                            <img src="../pages/checkout/bukti/<?= $data['bukti']; ?>" alt="bukti">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>