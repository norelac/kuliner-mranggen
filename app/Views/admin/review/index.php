<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-success">Data Review</h2>

    <a href="/admin" class="btn btn-secondary">
        ← Kembali ke Dashboard
    </a>
</div>

<div class="card shadow border-0 rounded-4">
    <div class="card-body">

        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Kuliner</th>
                    <th>Rating</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($review)): ?>
                    <?php $no = 1; ?>
                    <?php foreach ($review as $item): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= esc($item['nama_user']) ?></td>
                            <td><?= esc($item['nama_kuliner']) ?></td>
                            <td><?= esc($item['rating']) ?>/5</td>
                            <td><?= esc($item['komentar']) ?></td>
                            <td>
                                <a href="/admin/review/delete/<?= $item['id'] ?>"
                                   onclick="return confirm('Yakin hapus review ini?')"
                                   class="btn btn-danger btn-sm">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            Belum ada data review
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>

        </table>

    </div>
</div>

<?= $this->endSection() ?>