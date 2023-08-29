<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Checkout</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Item</th>
                                    <th>No HP</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('conf/koneksi.php');
                                $sql = "SELECT * FROM user,checkout WHERE user.id_user=checkout.id_user ORDER BY checkout.id_checkout DESC";
                                $query = mysqli_query($koneksi, $sql);
                                $no = 0;
                                while ($data = mysqli_fetch_array($query)) {
                                    $no = $no + 1;
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $data['nama']; ?></td>

                                        <td><?= $data['item']; ?></td>
                                        <td><?= $data['no']; ?></td>
                                        <td><?php
                                            if ($data['status'] == 'belum') { ?>
                                                <label class="badge badge-danger">Belum</label>
                                            <?php } else { ?>
                                                <label class="badge badge-success">Selesai</label>
                                            <?php } ?>
                                        </td>
                                        <td><?= date('d F Y', strtotime($data['tanggal'])); ?></td>
                                        <td><a href="?page=detail&id_checkout=<?= $data['id_checkout']; ?>&id_user=<?= $data['id_user']; ?>" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>