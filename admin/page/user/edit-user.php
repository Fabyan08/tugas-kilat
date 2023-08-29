<?php
include('conf/koneksi.php');
$sql = "SELECT * FROM user WHERE id_user='$_GET[id_user]'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data <?= $data['nama']; ?></h4>
                    <form class="form-sample" action="page/user/proses-edit.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <input type="text" value="<?= $data['id_user']; ?>" name="id_user" hidden>
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" value="<?= $data['email']; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="alamat" value="<?= $data['alamat']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="password" name="password" value="<?= $data['password']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Foto Profil</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="profil" value="<?= $data['profil']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Level</label>
                                    <div class="col-sm-9">
                                        <select name="level" class="form-control">
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="index.php?page=user" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>