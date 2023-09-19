<div class="head">
    <h1><?= $data['judul']; ?></h1>
</div>
<div class="table">
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>judul</td>
                <td>Pengarang</td>
                <td>Stock</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($data['buku'] as $book) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $book['judul_buku']; ?></td>
                <td><?= $book['pengarang']; ?></td>
                <td><?= $book['stock_buku']; ?></td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

