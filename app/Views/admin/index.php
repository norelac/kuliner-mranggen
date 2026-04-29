<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold text-success">Data Kuliner</h2>
        <p class="text-muted mb-0">
            Kelola data tempat makan di Kuliner Mranggen
        </p>
    </div>

    <div>
        <a href="/admin" class="btn btn-secondary me-2">
            ← Kembali ke Dashboard
        </a>

        <a href="/admin/kuliner/create" class="btn btn-success">
            + Tambah Kuliner
        </a>
    </div>
</div>

<div class="card shadow border-0 rounded-4">
    <div class="card-body">

        <table class="table table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th width="5%">No</th>
                    <th>Nama Kuliner</th>
                    <th>Alamat</th>
                    <th>Deskripsi</th>
                    <th width="20%">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($kuliner)): ?>
                    <?php $no = 1; ?>
                    <?php foreach ($kuliner as $item): ?>
                        <tr>
                            <td><?= $no++ ?></td>

                            <td>
                                <strong><?= esc((string) $item['nama']) ?></strong>
                            </td>

                            <td>
                                <?= esc((string) $item['alamat']) ?>
                            </td>

                            <td>
                                <?= esc((string) $item['deskripsi']) ?>
                            </td>

                            <td>
                                <a href="/admin/kuliner/edit/<?= $item['id'] ?>"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="/admin/kuliner/delete/<?= $item['id'] ?>"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                                   class="btn btn-danger btn-sm">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Belum ada data kuliner
                        </tr>
                <?php endif; ?>
            </tbody>

        </table>

    </div>
</div>

<?= $this->endSection() ?>