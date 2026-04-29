<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kuliner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Kuliner</h1>

        <a href="/admin/kuliner/create" class="btn btn-primary mb-3">Tambah Kuliner</a>

        <hr>

        <?php if (!empty($kuliner)): ?>
            <?php foreach ($kuliner as $item): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 class="card-title"><?= esc((string) $item['nama']) ?></h3>
                        <p class="card-text"><strong>Alamat:</strong> <?= esc((string) $item['alamat']) ?></p>
                        <p class="card-text"><strong>Deskripsi:</strong> <?= esc((string) $item['deskripsi']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada data kuliner.</p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>