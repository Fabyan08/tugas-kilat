<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ulasan User</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No</th>
                                    <th>Ulasan</th>
                                    <th>Balas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('conf/koneksi.php');
                                $sql = "SELECT * FROM ulasan";
                                $query = mysqli_query($koneksi, $sql);
                                $no = 0;
                                while ($data = mysqli_fetch_array($query)) {
                                    $no = $no + 1;
                                ?>
                                    <tr>
                                        <td><?= $no; ?></td>
                                        <td><?= $data['nama']; ?></td>
                                        <td><?= $data['email']; ?></td>
                                        <td><?= $data['no']; ?></td>
                                        <td><?= $data['pesan']; ?></td>
                                        <td>
                                            <form action="page/ulasan/balas.php" method="POST">
                                                <input type="text" value="<?= $data['id_ulasan']; ?>" hidden name="id_ulasan">
                                                <?php
                                                if ($data['balasan'] == null) {
                                                ?>
                                                    <textarea name="balas" class="form-control" id="" cols="30" rows="10"></textarea>
                                                    <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" name="submit" class="btn btn-sm btn-rounded btn-primary">Balas</button>
                                                <?php } else {
                                                    echo $data['balasan'];
                                                } ?>

                                            </form>
                                        </td>

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