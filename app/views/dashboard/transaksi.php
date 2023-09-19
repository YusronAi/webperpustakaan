<div class="head">
    <h1><?= $data['judul']; ?></h1>
</div>
<table class="table">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Role</td>
            <td>Tanggal Pinjam</td>
            <td>Tempo Pinjam</td>
            <td>Jumlah</td>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach($data['pinjam'] as $pinjam) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $pinjam['nama_anggota']; ?></td>
            <td><?= $pinjam['role']; ?></td>
            <td><?= $pinjam['tanggal_peminjaman']; ?></td>
            <td><?= $pinjam['tempo_pengembalian']; ?></td>
            <td><?= $pinjam['jumlah_peminjaman'] ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </tbody>
</table>