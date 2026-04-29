<h1>Data Kuliner</h1>

<a href="/admin/kuliner/create">Tambah Kuliner</a>

<hr>

<?php if (!empty($kuliner)) : ?>

    <?php foreach ($kuliner as $item) : ?>

        <h3><?= $item['nama']; ?></h3>
        <p><?= $item['alamat']; ?></p>
        <p><?= $item['deskripsi']; ?></p>

        <hr>

    <?php endforeach; ?>

<?php else : ?>

    <p>Belum ada data kuliner.</p>

<?php endif; ?>