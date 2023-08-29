<?php
include('./config/koneksi.php');
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'")
    or die(mysqli_error($koneksi));

$row = mysqli_fetch_array($query); ?>
<style>
    body {
        color: #1a202c;
        text-align: left;
        background-color: #ffff;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }
</style>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Profile</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Profile</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="main-body">

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?= 'pages/user/profil/img/' . $row['profil']; ?>" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?= $row['nama']; ?></h4>
                                <p class="text-secondary mb-1">Level: <?= $row['level']; ?></p>
                                <a href="auth/logout.php" class="genric-btn danger circle">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $row['nama']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">NO HP</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $row['no']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $row['email']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $row['alamat']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $row['password']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">


                                <a class="genric-btn info circle" href="" data-toggle="modal" data-target="#edit">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_SESSION['level'] == 'user') { ?>
            <h3>History</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Item</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Bukti</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM checkout WHERE id_user='$_SESSION[id_user]' ORDER BY id_checkout DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 0;
                    while ($data = mysqli_fetch_array($query)) {
                        $no  = $no + 1;
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $data['item']; ?></td>
                            <td><?= $data['qty']; ?></td>
                            <td><?= $data['subtotal']; ?></td>
                            <td><?= $data['deskripsi']; ?></td>
                            <td><?php
                                if ($data['bukti'] == null) {
                                } else { ?>
                                    <span class="badge badge-success">Berhasil</span>
                                <?php } ?>
                            </td>
                            <td><?php if ($data['status'] == 'belum') { ?>
                                    <span class="badge badge-danger">Belum</span>
                                <?php } else { ?>
                                    <span class="badge badge-success">Selesai</span>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <h3>History Ulasan</h3>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Balasan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM ulasan WHERE nama='$_SESSION[nama]' ORDER BY id_ulasan DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 0;
                    while ($data = mysqli_fetch_array($query)) {
                        $no  = $no + 1;
                    ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $data['pesan']; ?></td>
                            <td><?= $data['balasan']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>

</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="pages/user/profil/edit-profil.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="id_user" value="<?= $row['id_user']; ?>" hidden>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" value="<?= $row['nama']; ?>" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <input type="text" value="<?= $row['level']; ?>" name="level" hidden>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" value="<?= $row['email']; ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" value="<?= $row['alamat']; ?>" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No HP</label>
                        <input type="text" value="<?= $row['no']; ?>" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" value="<?= $row['password']; ?>" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Profil</label>
                        <input type="file" name="profil" class="form-control" id="exampleInputPassword1">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>