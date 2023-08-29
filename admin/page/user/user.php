<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data User</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Profil</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Level</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('./conf/koneksi.php');
                                    $sql = "SELECT * FROM user";
                                    $query = mysqli_query($koneksi, $sql);
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no = $no + 1;
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td class="py-1">
                                                <img src="../pages/user/profil/img/<?= $data['profil']; ?>" alt="image">
                                            </td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['email']; ?></td>
                                            <td><?= $data['alamat']; ?></td>
                                            <td><?= $data['level']; ?></td>
                                            <td><a href="?page=edit-user&id_user=<?= $data['id_user'] ?>" class="btn btn-warning btn-rounded">Edit</a></td>
                                            <td><a href="page/user/hapus.php?id_user=<?= $data['id_user'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" class="btn btn-danger btn-rounded">Hapus</a></td>
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
</div>