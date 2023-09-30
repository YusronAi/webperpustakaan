    <form action="" method="post">
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['value']['id']; ?>"><br>
        <input type="text" name="judul_buku" id="judul_buku" value="<?= $data['value']['judul_buku']; ?>"><br>
        <input type="number" name="id_kategori" id="id_kategori" value="<?= $data['value']['id_kategori']; ?>"><br>
        <input type="text" name="pengarang" id="pengarang" value="<?= $data['value']['pengarang']; ?>"><br>
        <input type="text" name="penerbit" id="penerbit" value="<?= $data['value']['penerbit']; ?>"><br>
        <input type="date" name="tahun_terbit" id="tahun_terbit" value="<?= $data['value']['tahun_terbit']; ?>"><br>
        <input type="text" name="stock_buku" id="stock_buku" value="<?= $data['value']['stock_buku']; ?>"><br>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary bg-danger" data-bs-dismiss="modal"><a href="<?= Config::BASEURL; ?>/dashboard/databuku">Batal</a></button>
            <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
        </div>
    </form>