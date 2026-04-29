<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Panel' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7f2;
        }

        .sidebar {
            min-height: 100vh;
            background: #011c03;
            color: white;
            padding: 20px;
        }

        .sidebar h3 {
            font-weight: bold;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .sidebar a:hover {
            background: rgba(255,255,255,0.2);
        }

        .content {
            padding: 30px;
        }

        .card-stat {
            border: none;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
        }

        .btn-main {
            background: #2E7D32;
            color: white;
            border: none;
        }

        .btn-main:hover {
            background: #1B5E20;
            color: white;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 sidebar">
            <h3>Kuliner Mranggen</h3>
            <hr>

            <a href="/admin">Dashboard</a>
            <a href="/admin/kuliner">Data Kuliner</a>
            <a href="/admin/kategori">Kategori</a>
            <a href="/admin/review">Review</a>
            <a href="/admin/user">User</a>
            <a href="/admin/laporan">Laporan</a>
            <a href="/logout" class="text-warning">Logout</a>
        </div>

        <div class="col-md-10 content">
            <?= $this->renderSection('content') ?>
        </div>

    </div>
</div>

</body>
</html>