<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Data Kategori</h2>

        <a href="/admin/kategori/create" class="btn btn-primary">
            + Tambah Kategori
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th width="10%">No</th>
                        <th>Nama Kategori</th>
                        <th width="20%">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($kategori)): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($kategori as $item): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $item['nama'] ?></td>
                                <td>
                                    <a href="/admin/kategori/delete/<?= $item['id'] ?>"
                                       onclick="return confirm('Yakin ingin menghapus?')"
                                       class="btn btn-danger btn-sm">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center">
                                Tidak ada data kategori
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>