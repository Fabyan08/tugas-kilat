<?php
include('conf/koneksi.php');
$sql = "SELECT * FROM item WHERE id_item='$_GET[id_item]'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Data <?= $data['nama']; ?></h4>
                    <form class="form-sample" action="page/item/proses-edit.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <input type="text" value="<?= $data['id_item']; ?>" name="id_item" hidden>
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="deskripsi" id="exampleTextarea1" rows="4"><?= $data['deskripsi']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Harga</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="harga" value="<?= $data['harga']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gambar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="gambar" value="<?= $data['gambar']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="index.php?page=item" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>