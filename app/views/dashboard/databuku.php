<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Tambah Buku
</button>

<div class="head">
    <h1><?= $data['judul']; ?></h1>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>judul</td>
                <td>Pengarang</td>
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
                    <td><?= $book['stock_buku']; ?></td>
                    <td><a href="<?= Config::BASEURL; ?>/siswa/ubah/<?= $book['id_buku']; ?>" class="link-primary modal-ubah" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-id="<?= $book['id_buku']; ?>">Ubah</a> | <a href="<?= Config::BASEURL; ?>/dashboard/hapus/<?= $book['id_buku']; ?>">Hapus</a></td>
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
                    <input type="hidden" class="form-control" id="id_buku" name="id_buku"><br>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>/dashboard/tambah" method="post">
                    <input type="hidden" class="form-control" id="id_buku" name="id_buku"><br>
                    <input type="text" name="judul_buku" id="judul_buku" placeholder="<?= $book['judul_buku']; ?>"><br>
                    <input type="number" name="id_kategori" id="id_kategori" placeholder="<?= $book['id_kategori']; ?>"><br>
                    <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang"><br>
                    <input type="text" name="penerbit" id="penerbit" placeholder="<?= $book['penerbit']; ?>"><br>
                    <input type="date" name="tahun_terbit" id="tahun_terbit" placeholder="<?= $book['tahun_terbit']; ?>"><br>
                    <input type="number" name="stock_buku" id="stock_buku" placeholder="<?= $book['stock_buku']; ?>"><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>