<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h4 class="card-title">Data Item</h4>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#exampleModal"><i class="ti ti-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('./conf/koneksi.php');
                                    $sql = "SELECT * FROM item";
                                    $query = mysqli_query($koneksi, $sql);
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no = $no + 1;
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td class="py-1">
                                                <img src="page/item/img/<?= $data['gambar']; ?>" alt="image">
                                            </td>
                                            <td><?= $data['nama']; ?></td>
                                            <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                                            <td><a href="?page=edit-item&id_item=<?= $data['id_item'] ?>" class="btn btn-warning btn-rounded">Edit</a></td>
                                            <td><a href="page/item/hapus-item.php?id_item=<?= $data['id_item'] ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')" class="btn btn-danger btn-rounded">Hapus</a></td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" action="page/item/tambah-item.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputName1">Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Deskripsi</label>
                        <textarea class="form-control" id="exampleTextarea1" name="deskripsi" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Harga</label>
                        <input type="text" class="form-control digits" onkeyup="checkPrice()" name="harga" id="exampleInputName1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Gambar</label>
                        <input type="file" class="form-control" id="exampleInputCity1" name="gambar" placeholder="Location">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    function checkPrice() {
        $('input.digits').keyup(function(event) {
            // skip for arrow keys
            if (event.which >= 37 && event.which <= 40) {
                event.preventDefault();
            }
            var $this = $(this);
            var num = $this.val().replace(/,/g, '');
            // the following line has been simplified. Revision history contains original.
            $this.val(num.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
        });
    }
</script>