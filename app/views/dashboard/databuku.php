<div class="head">
    <h1><?= $data['judul']; ?></h1>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Tambah Buku
</button>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>judul</td>
                <td>Pengarang</td>
                <td>Penerbit</td>
                <td>Tahun Terbit</td>
                <td>Stock</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['buku'] as $book) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $book['judul_buku']; ?></td>
                    <td><?= $book['pengarang']; ?></td>
                    <td><?= $book['penerbit']; ?></td>
                    <td><?= $book['tahun_terbit']; ?></td>
                    <td><?= $book['stock_buku']; ?></td>
                    <td><a href="<?= Config::BASEURL; ?>/dashboard/ubahbuku/<?= $book['id']; ?>" class="badge bg-success text-white">Ubah</a> | <a href="<?= Config::BASEURL; ?>/dashboard/hapusbuku/<?= $book['id']; ?> " class="badge text-white bg-danger">Hapus</a></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>/dashboard/tambah" method="post">
                    <input type="hidden" class="form-control" id="id" name="id"><br>
                    <input type="text" name="judul_buku" id="judul_buku" placeholder="Judul Buku"><br>
                    <input type="number" name="id_kategori" id="id_kategori" placeholder="Id Kategori"><br>
                    <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang"><br>
                    <input type="text" name="penerbit" id="penerbit" placeholder="Penerbit"><br>
                    <input type="date" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit"><br>
                    <input type="number" name="stock_buku" id="stock_buku" placeholder="Stock Buku"><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>