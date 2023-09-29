<div class="head">
    <h1><?= $data['judul']; ?></h1>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Tambah Anggota
</button>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Nomor Telephone</td>
                <td>Email</td>
                <td>Password</td>
                <td>Role</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data['user'] as $user) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $user['nama_anggota']; ?></td>
                    <td><?= $user['alamat']; ?></td>
                    <td><?= $user['nomor_telepone']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['password']; ?></td>
                    <td><?= $user['role']; ?></td>
                    <td><a href="<?= Config::BASEURL; ?>/dashboard/ubahanggota/<?= $user['id_anggota']; ?>" class="badge text-white bg-success modal-ubah" data-bs-toggle="modal" data-bs-target="#exampleModal2">Ubah</a> | <a href="<?= Config::BASEURL; ?>/dashboard/hapusanggota/<?= $user['id_anggota']; ?>" class=" badge text-white bg-danger">Hapus</a></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>/dashboard/tambahanggota" method="post">
                    <input type="hidden" class="form-control" id="id_anggota" name="id_anggota"><br>
                    <input type="text" name="nama_anggota" id="nama_anggota" placeholder="Nama Anggota"><br>
                    <input type="number" name="nomor_telepone" id="nomor_telepone" placeholder="Nomor Telepone"><br>
                    <input type="email" name="email" id="email" placeholder="Email"><br>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat"><br>
                    <input type="text" name="password" id="password" placeholder="Password"><br>
                    <input type="text" name="role" id="role" placeholder="Role"><br>
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
                <h5 class="modal-title" id="exampleModalLabel">Ubah Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= Config::BASEURL; ?>/dashboard/ubahanggota" method="post">
                    <input type="hidden" class="form-control" id="id_anggota" name="id_anggota" value="<?= $user['id_anggota']; ?>"><br>
                    <input type="text" name="nama_anggota" id="nama_anggota" placeholder="<?= $user['nama_anggota']; ?>"><br>
                    <input type="number" name="nomor_telepone" id="nomor_telepone" placeholder="<?= $user['nomor_telepone']; ?>"><br>
                    <input type="text" name="alamat" id="alamat" placeholder="<?= $user['alamat']; ?>"><br>
                    <input type="email" name="email" id="email" placeholder="<?= $user['email']; ?>"><br>
                    <input type="text" name="password" id="password" placeholder="<?= $user['password']; ?>"><br>
                    <input type="text" name="role" id="role" placeholder="<?= $user['role']; ?>"><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>