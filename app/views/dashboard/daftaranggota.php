<div class="head">
    <h1><?= $data['judul']; ?></h1>
</div>
<div class="table">
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
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($data['user'] as $user) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $user['nama_anggota']; ?></td>
                <td><?= $user['alamat']; ?></td>
                <td><?= $user['nomor_telepone']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['password']; ?></td>
                <td><?= $user['role']; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

